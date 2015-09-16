<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1 )
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
$idordine = (int)$_GET['idordine'];
$query_spedito = $db->query("SELECT * FROM ordini WHERE idordine = '$idordine'");
$line_spedito = $query_spedito->fetch(PDO::FETCH_ASSOC);
if($line_spedito['completo'] == 1) //ordine già spedito
    echo '<script language=javascript>document.location.href="../orderlist.php?msg=2"</script>';
else{
    $idordine = (int)$_SESSION['idordine'];
    try{
        foreach($db->query("SELECT * FROM carrelli WHERE idordine = '$idordine'") as $record){
            $cod = $record['codice'];
            $qt = $record['quantita'];
            $query_gioco = $db->query("SELECT * FROM videogiochi WHERE codice = '$cod'");
            $line_gioco = $query_gioco->fetch(PDO::FETCH_ASSOC);
            $qt_gioco = (int)$line_gioco['quantita'];
            $qt = $qt + $qt_gioco;
            $query_update = $db->query("UPDATE videogiochi SET (quantita) = ('$qt') WHERE codice = $cod");
            $query_delete_carrelli = $db->query("DELETE FROM carrelli WHERE idordine = '$idordine' AND codice = '$cod'");
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
    try{
        $query_delete = $db->query("DELETE FROM ordini WHERE idordine = '$idordine'");
    }catch(PDOException $e){
        die($e->getMessage());
    }
    echo '<script language=javascript>document.location.href="../storico.php?msg=2"</script>';
}
