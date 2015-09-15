<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1){
    echo '<script language=javascript>document.location.href="myaccount.php?msg=2"</script>';
}
$nome = trim(pg_escape_string($dbconn, $_POST['nome']));
$cognome = trim(pg_escape_string($dbconn, $_POST['cognome']));
$telefono = trim(pg_escape_string($dbconn, $_POST['telefono']));
$indirizzo = trim(pg_escape_string($dbconn, $_POST['indirizzo']));
$cap = trim(pg_escape_string($dbconn, $_POST['cap']));
$citta = trim(pg_escape_string($dbconn, $_POST['citta']));
$prov = trim(pg_escape_string($dbconn, $_POST['prov']));
$email = trim(pg_escape_string($dbconn, $_POST['email']));
$login = trim(pg_escape_string($dbconn, $_POST['login']));
$psw = trim(pg_escape_string($dbconn, $_POST['psw']));
$psw2 = trim(pg_escape_string($dbconn, $_POST['psw2']));
$err=0;
/*CONTROLLI VARI*/
if(strlen($nome) < 1 || strlen($nome) > 10)
    header("location: ../admin_newuser.php?err=nome&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($cognome) < 1 || strlen($cognome) > 20)
    header("location: ../admin_newuser.php?err=cognome&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($telefono) < 1 || strlen($telefono) > 15)
    header("location: ../admin_newuser.php?err=telefono&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($indirizzo) < 1 || strlen($indirizzo) > 20)
    header("location: ../admin_newuser.php?err=indirizzo&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($cap) != 5)
    header("location: ../admin_newuser.php?err=cap&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($citta) < 1 || strlen($citta) > 25)
    header("location: ../admin_newuser.php?err=citta&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($prov) < 1 || strlen($prov) > 25)
    header("location: ../admin_newuser.php?err=prov&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($email) < 1 || strlen($email) > 80)
    header("location: ../admin_newuser.php?err=email&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($login) < 1 || strlen($login) > 15)
    header("location: ../admin_newuser.php?err=login&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if(strlen($psw) < 1 || strlen($psw) > 15)
    header("location: ../admin_newuser.php?err=psw&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
else if($psw != $psw2) //controllo password match
    header("location: ../admin_newuser.php?err=psw2&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email");
/*CONTROLLO USERNAME UNIVOCO*/
else{
    try{
        $query = "SELECT * FROM utenti WHERE login = '$login'"; //Query per dati dell'utente
        $result = pg_query($dbconn,$query); // Risultati $query
        $line = pg_fetch_array($result, null, PGSQL_ASSOC); //Array con i dati di $result
        $id = $line['login'];
    }catch (PDOException $e){
        die($e->getMessage());
    }
    if ($id == NULL) $trovato = 0 ; //utente non trovato
    else $trovato = 1; //utente trovato
    if($trovato == 1) {
        $err=1; echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=2&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
    }
    else {
        /*INSERIMENTO NEL DB*/
        if($err != 1){
            try{
                $db->query("INSERT INTO utenti (nome, cognome, telefono, indirizzo, cap, citta, provincia, amministratore, email, login, password)
                  VALUES ('$nome', '$cognome', '$telefono', '$indirizzo', '$cap', '$citta', '$prov', 'false', '$email', '$login', '$psw')");
            }catch (PDOException $e){
                die($e->getMessage());
            }
        }
        echo "<script language=javascript>document.location.href=\"../userlist.php?msg=1&user=$login\"</script>'";
    }
}
