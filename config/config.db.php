<?php
$dbconn = pg_connect("host=localhost dbname=ViPdGAMES user=postgres password=root")
    or die( 'Impossibile connettersi: ' . pg_last_error());

$db= new PDO("pgsql:host=localhost dbname=ViPdGAMES user=postgres password=root");
?>