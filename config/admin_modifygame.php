<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1){
    echo '<script language=javascript>document.location.href="myaccount.php?msg=2"</script>';
}
else{
    $cod = trim(pg_escape_string($dbconn, $_GET['cod']));
    $titolo = trim(pg_escape_string($dbconn, $_POST['titolo']));
    $categoria = trim(pg_escape_string($dbconn, $_POST['categoria']));
    echo "$categoria<br>";
    $console = trim(pg_escape_string($dbconn, $_POST['console']));
    echo "$console<br>";
    $descr = trim(pg_escape_string($dbconn, $_POST['descr']));
    echo "$descr<br>";
    $sviluppatore = trim(pg_escape_string($dbconn, $_POST['sviluppatore']));
    $path = trim(pg_escape_string($dbconn, $_POST['path']));
    $prezzo = (float)trim(pg_escape_string($dbconn, $_POST['prezzo']));
    $qt = (int)trim(pg_escape_string($dbconn, $_POST['qt']));
    try{
        $db->query("UPDATE videogiochi SET (titolo, console, descrizione, categoria, sviluppatore, prezzo, quantita, path) =
          ('$titolo', '$console', '$descr', '$categoria', '$sviluppatore', '$prezzo', '$qt', '$path') WHERE codice = $cod");
    }catch (PDOException $e){
        die($e->getMessage());
    }
    echo "<script language=javascript>document.location.href=\"../pages/product-details.php?cod=$cod\"</script>'";
}