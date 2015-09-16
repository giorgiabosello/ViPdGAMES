<?php
session_start();
require_once("config/config.db.php");
//se non c'è la sessione registrata
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="login.php?err=2"</script>';
}
else{
    $idordine = $_SESSION['idordine'];
}
$grantotale = 0;
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Carrello | ViPd GAMES</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="logo.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    <!--navbar-->

    <div id="navbar"></div>

    <!--/navbar-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Carrello</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <?php if(isset($_GET['msg']) && $_GET['msg' == 1]) echo "<p style='color: green'></br>Carrello aggiornato!</p>";?>
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td>Titolo</td>
                        <td>Codice Gioco</td>
                        <td>Prezzo</td>
                        <td>Quantita`</td>
                        <td>Prezzo Totale</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($db->query("SELECT * FROM carrelli WHERE idordine = '$idordine'") as $record) {
                        $codice = $record['codice']; //codice gioco nel carrello
                        $codice = $record['codice'];
                        $qt = $record['quantita'];
                        try{
                            $query_gioco = $db->query("SELECT * FROM videogiochi WHERE codice = '$codice'");
                            $line_gioco = $query_gioco->fetch(PDO::FETCH_ASSOC);
                            $tot = $line_gioco['prezzo'] * $qt;
                            $grantotale += $tot;
                        }catch(PDOException $e){
                            die($e->getMessage());
                        }
                        ?>
                        <tr>
                            <td> <a href="pages/product-details.php?cod=<?php echo "$line_gioco[codice]\"><p>$line_gioco[titolo]</p>"?></td>
                            <td> <?php echo "$line_gioco[codice]"?></td>
                            <td> <?php echo "€$line_gioco[prezzo]"?></td>
                            <td> <?php echo "$qt"?></td>
                            <td> <?php echo "$tot"?></td>
                            <td> <a href="config/carrello_delete.php?cod=<?php echo "$codice&qt=$qt"?>"> Delete</a> </td>
                        </tr>
                    <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Totale carrello <span>€ <?php echo "$grantotale"?></span>
                            </li>
                            <li>Costi di spedizione <span>€ 0</span>
                            </li>
                        </ul>
                        <a class="btn btn-default check_out" href="config/order_confirm.php?pag=bonifico">Bonifico</a>
                        <a class="btn btn-default check_out" href="config/order_confirm.php?pag=paypal">Paypal</a>
                        <a class="btn btn-default check_out" href="config/order_confirm.php?pag=contrassegno">Contrassegno</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->

    <!--Footer-->
    <div id="footer"></div>
    <!--/Footer-->

    <!-- Script js -->
    <script>
        $("#footer").load("footer.php");
    </script>
    <script>
        $("#navbar").load("navbar.php");
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>