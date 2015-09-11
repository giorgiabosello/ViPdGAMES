<?php
session_start();
require_once("config.db.php"); //importo il file con connessione
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="login.php?err=2"</script>';
}
else {
    $username = pg_escape_string($dbconn, $_SESSION['id']);
    $email = pg_escape_string($dbconn, $_POST["email"]);
    $telefono = pg_escape_string($dbconn, $_POST["telefono"]);
    $nome = pg_escape_string($dbconn, $_POST["nome"]);
    $cognome = pg_escape_string($dbconn, $_POST["cognome"]);
    $indirizzo = pg_escape_string($dbconn, $_POST["indirizzo"]);
    $cap = pg_escape_string($dbconn, $_POST["cap"]);
    $citta = pg_escape_string($dbconn, $_POST["citta"]);
    $provincia = pg_escape_string($dbconn, $_POST["provincia"]);
    $query = "UPDATE utenti SET (email, telefono, nome, cognome, indirizzo, cap, citta, provincia) =
    ('$email', '$telefono', '$nome', '$cognome', '$indirizzo', '$cap', '$citta', '$provincia')
      WHERE login = '$username'";
    $result = pg_query($dbconn,$query) or die('Query fallita: ' . pg_last_error()); // Risultati $query
    $row_count= pg_num_rows($result);
    echo '<script language=javascript>document.location.href="../myaccount.php?mes=1"</script>';

}
?>