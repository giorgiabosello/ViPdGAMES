<?php
session_start();
require_once("config.db.php");
if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1)
    echo "<script language=javascript>document.location.href=\"../login.php?err=2\"</script>";
else if(!isset($_SESSION['idordine']) || !isset($_GET['pag']))
    echo "<script language=javascript>document.location.href=\"../shop.php\"</script>";
else{
    $idordine = $_SESSION['idordine'];
    $pagamento = $_GET['pag'];
    $completo = 1;
    $query = $db->query("UPDATE ordini SET (metodo_pagamento, completo) = ('$pagamento', '$completo') WHERE idordine = $idordine");
    echo "<script language=javascript>document.location.href=\"../storico.php\"</script>";
}