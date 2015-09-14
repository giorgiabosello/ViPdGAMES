<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
$username = trim(pg_escape_string($dbconn, $_POST['username'])); //escape caratteri dannosi
$password = trim(pg_escape_string($dbconn, $_POST['password']));
$query = "SELECT * FROM utenti WHERE login = '$username' AND password = '$password'"; //Query per dati dell'utente
$result = pg_query($dbconn,$query) or die('Query fallita: ' . pg_last_error()); // Risultati $query
$line = pg_fetch_array($result, null, PGSQL_ASSOC); //Array con i dati di $result
$cod = $line['login'];
if ($cod == NULL) $trovato = 0 ; //utente non trovato
else $trovato = 1; //utente trovato
if($trovato === 1) {
    $_SESSION["auth"] = 1;
    $_SESSION["id"] = $username;
    if($line['amministratore'] == 'true')
        $_SESSION['admin'] = 1;
    else
        $_SESSION['admin'] = 0;
    /*Redirect alla pagina MyAccount*/
    echo '<script language=javascript>document.location.href="../myaccount.php"</script>';
}
else {
    /*Username e password errati, redirect alla pagina di login*/
    echo '<script language=javascript>document.location.href="../login.php?err=1"</script>';
}
?>