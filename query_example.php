<?php
//importo il file con connessione
require_once("config.db.php");

// Preparo la query generica
$query = 'SELECT * FROM utenti';
$result = pg_query($dbconn,$query) or die('Query fallita: ' . pg_last_error());

// Stampa risultati
echo "<table border=\"1\" >\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);


?>
