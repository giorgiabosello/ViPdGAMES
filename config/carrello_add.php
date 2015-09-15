<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
}
$qt = (int)pg_escape_string($dbconn, $_POST['qt']); //quantita richiesta presa da POST
$codice = (int)pg_escape_string($dbconn, $_GET['cod']); //codice preso da POST
$username = pg_escape_string($dbconn, $_SESSION['id']); //username preso da SESSION
$today = date("m/d/Y"); //data odierna in stringa per ordine
$dispo_reale = $db->query("SELECT videogiochi.quantita FROM videogiochi WHERE codice = '$codice'"); //disponibilita presa da DB
$dispo = $dispo_reale->fetch(PDO::FETCH_ASSOC); //calcolo disponibilit� residua
if($qt > $dispo['quantita'])
    $qt = $dispo['quantita'];
/*Creazione nuovo ordine, se non ne esiste uno*/
if(!isset($_SESSION["idordine"])){
    try{
        $query_ordine = $db->query("INSERT INTO ordini(login, data)  VALUES ( '$username', '$today');"); //Query per inserimento nuovo ordine
        $_SESSION["idordine"] = $db->lastInsertId('ordini_idordine_seq'); //registro il nuovo ordine in SESSION
    }catch (PDOException $e){
        die($e->getMessage());
    }
}
try{
    $idordine = (int)$_SESSION["idordine"]; //idordine preso da SESSION
    $query_controllo = "SELECT * FROM carrelli WHERE idordine = '$idordine' AND codice = '$codice'"; //controllo se il codice c'e gia nell'ordine
    $result_controllo = pg_query($dbconn, $query_controllo);// Risultati query controllo
    $line_controllo = pg_fetch_array($result_controllo, null, PGSQL_ASSOC); //Array con i dati di $result
    $quantita_controllo = (int)$line_controllo['quantita'];
    if ($quantita_controllo == NULL) $trovato = 0 ; //carrello non trovato
    else $trovato = 1; //carrello trovato
    if($trovato == 0){ //gioco non trovato nell'ordine, lo inserisco come nuovo
        $query_carrello = $db->query("INSERT INTO carrelli(idordine, codice, quantita)  VALUES ( '$idordine', '$codice', '$qt')");//Query per inserimento nuovo carrello
        $line_carrello = $query_carrello->fetch(PDO::FETCH_ASSOC);//Query per inserimento nuovo carrello
    }
    else{ //gioco trovato, aggiorno solo la quantita
        $query_aggiunta = $db->exec("UPDATE carrelli SET (quantita) = ($quantita_controllo + $qt) WHERE idordine = '$idordine' AND codice = '$codice'");
    }
    $qt_aggiornata = $dispo['quantita'] - $qt; //aggiornamento quantit� disponibile
    $query_update_dispo = $db->query("UPDATE videogiochi SET (quantita) = ($qt_aggiornata)WHERE codice = '$codice'"); //query per aggiornamento quantit� disponibile
    $line_update_dispo = $query_update_dispo->fetch(PDO::FETCH_ASSOC);//query per aggiornamento quantit� disponibile
}catch (PDOException $e){
    die($e->getMessage());
}
?>
