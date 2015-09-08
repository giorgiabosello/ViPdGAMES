<?php
$dbconn = pg_connect("host=localhost dbname=ViPdGAMES user=postgres password=john")
    or die( 'Impossibile connettersi: ' . pg_last_error());
?>