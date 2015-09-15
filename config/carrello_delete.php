<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1 ){
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
}
if (!isset($_SESSION["idordine"]) || !isset($_GET['cod'])){
    echo '<script language=javascript>document.location.href="../shop.php"</script>';
}
$idordine = (int)$_SESSION['idordine'];
$cod = (int)$_GET['cod'];
$qt = (int)$_GET['qt'];
try{
    $query_delete = $db->query("DELETE FROM carrelli WHERE codice = '$cod' AND idordine = '$idordine'");
}catch(PDOException $e){
    die($e->getMessage());
}
try{
    $query_gioco = $db->query("SELECT * FROM videogiochi WHERE codice = '$cod'");
    $line_gioco = $query_gioco->fetch(PDO::FETCH_ASSOC);
    $qt_gioco = (int)$line_gioco['quantita'];
    $qt = $qt + $qt_gioco;
    $query_update = $db->query("UPDATE videogiochi SET (quantita) = ('$qt') WHERE codice = $cod");
}catch(PDOException $e){
    die($e->getMessage());
}
echo '<script language=javascript>document.location.href="../cart.php?msg=1"</script>';