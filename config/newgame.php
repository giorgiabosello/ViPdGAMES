<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
}
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1){
    echo '<script language=javascript>document.location.href="myaccount.php?msg=2"</script>';
}
$titolo = trim(pg_escape_string($dbconn, $_POST['titolo']));
$categoria = trim(pg_escape_string($dbconn, $_POST['categoria']));
$console = trim(pg_escape_string($dbconn, $_POST['console']));
$descr = trim(pg_escape_string($dbconn, $_POST['descr']));
$sviluppatore = trim(pg_escape_string($dbconn, $_POST['sviluppatore']));
$path = trim(pg_escape_string($dbconn, $_POST['path']));
$prezzo = (float)trim(pg_escape_string($dbconn, $_POST['prezzo']));
$qt = (int)trim(pg_escape_string($dbconn, $_POST['qt']));
try{
    $db->query("INSERT INTO videogiochi (titolo, console, descrizione, categoria, sviluppatore, prezzo, quantita, path)
      VALUES ('$titolo', '$console', '$descr', '$categoria', '$sviluppatore', '$prezzo', '$qt', '$path')");
    $cod = $db->lastInsertId('videogiochi_codice_seq');
}catch (PDOException $e){
    die($e->getMessage());
}
echo "<script language=javascript>document.location.href=\"../pages/product-details.php?cod=$cod\"</script>'";