<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
}
$qt = (int)pg_escape_string($dbconn, $_POST['qt']); //quantità presa da POST
print_r($qt);
$codice = (int)pg_escape_string($dbconn, $_POST['cod']); //codice preso da POST
print_r($codice);
$username = pg_escape_string($dbconn, $_SESSION['id']); //username preso da SESSION
print_r($username);
$today = date("m/d/Y"); //data odierna in stringa per ordine
$query_dispo = "SELECT videogiochi.quantita FROM videogiochi WHERE codice = '$codice'"; //calcolo disponibilità residua
$dispo = $query_dispo->fetch(PDO::FETCH_ASSOC); //calcolo disponibilità residua
echo "$dispo";
/*Creazione nuovo ordine, se non ne esiste uno*/
if(!isset($_SESSION["idordine"])){
    $query_ordine = $db->query("INSERT INTO ordini(login, data)  VALUES ( '$username', '$today');"); //Query per inserimento nuovo ordine
    $line_ordine = $query_ordine->fetch(PDO::FETCH_ASSOC);//Query per inserimento nuovo ordine
    $_SESSION["idordine"] = $db->lastInsertId(); //registro il nuovo ordine in SESSION
}
$idordine = $_SESSION["idordine"]; //idordine preso da SESSION
$query_carrello = $db->query("INSERT INTO carrelli(idordine, codice, quantita)  VALUES ( '$idordine', '$codice', '$qt')");//Query per inserimento nuovo carrello
$line_carrello = $query_carrello->fetch(PDO::FETCH_ASSOC);//Query per inserimento nuovo carrello
$qt_aggiornata = $dispo - $qt; //aggiornamento quantità disponibile
$query_update_dispo = $db->query("UPDATE videogiochi SET (quantita) = ($qt_aggiornata)WHERE codice = '$codice'"); //query per aggiornamento quantità disponibile
$line_update_dispo = $query_update_dispo->fetch(PDO::FETCH_ASSOC);//query per aggiornamento quantità disponibile
?>