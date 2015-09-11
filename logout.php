<?php
session_start();
session_destroy(); //distruggo tutte le sessioni
header("location: index.php");
exit();