<?php
// Connessione
$dbconn = pg_connect("host=localhost dbname=ViPdGAMES user=postgres password=")
    or die('Impossibile connettersi: ' . pg_last_error());


// Chiusura connessione
//pg_close($dbconn);
?>
