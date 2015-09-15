<?php
$dbconn = pg_connect("host=localhost dbname=ViPdGAMES user=postgres password=john")
    or die( 'Impossibile connettersi: ' . pg_last_error());

$db= new PDO("pgsql:host=localhost dbname=ViPdGAMES user=postgres password=john");
$db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>