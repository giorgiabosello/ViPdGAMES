<?php
session_start();
require_once("config/config.db.php"); //importo il file con connessione
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
}
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
                    <li class="active">Storico Ordini</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td>ID Ordine</td>
                            <td>Login</td>
                            <td>Data</td>
                            <td>Metodo di Pagamento</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p><a href="">10001</a></p> <!-- Se ci metti il link al videogioco, scrivi dentro href, sennò toglilo e scrivi solo al posto di ID Ordine -->
                            </td>
                            <td>
                                <p>ElenaColombo</p>
                            </td>
                            <td>
                                <p>12/09/2015</p>
                            </td>
                            <td>
                                <p>Visa</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><a href="">ID Ordine</a></p> <!-- Se ci metti il link al videogioco, scrivi dentro href, sennò toglilo e scrivi solo al posto di ID Ordine -->
                            </td>
                            <td>
                                <p>Login</p>
                            </td>
                            <td>
                                <p>Data</p>
                            </td>
                            <td>
                                <p>Metodo di Pagamento</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><a href="">ID Ordine</a></p> <!-- Se ci metti il link al videogioco, scrivi dentro href, sennò toglilo e scrivi solo al posto di ID Ordine -->
                            </td>
                            <td>
                                <p>Login</p>
                            </td>
                            <td>
                                <p>Data</p>
                            </td>
                            <td>
                                <p>Metodo di Pagamento</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

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