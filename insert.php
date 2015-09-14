<?php
session_start();
require_once("config/config.db.php"); //importo il file con connessione
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="../login.php?err=2"</script>';
}
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1){
    echo '<script language=javascript>document.location.href="myaccount.php?msg=2"</script>';
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Inserisci Gioco | ViPd GAMES</title>
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

    <div id="insert-page" class="container">
        <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Inserisci Gioco</li>
                </ol>
            </div>
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Inserisci Gioco</h2>
                    <br>
                    <?php if(isset($_GET['msg'])){
                        $msg = $_GET['msg'];
                        echo "<p style='color: green' style='text-align: center'>Gioco inserito con successo con codice: $msg</p>";
                    } ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="new game" method="post" action="config/newgame.php">
                    </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="titolo" class="form-control" required="required" placeholder="Titolo">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" required="required" name="categoria">
                                    <option value='' disabled selected style='display:none;'>Categoria</option>
                                    <option>Azione/Avventura</option>
                                    <option>RPG</option>
                                    <option>Simulazione</option>
                                    <option>Sparatutto</option>
                                    <option>Sport</option>
                                    <option>Strategia</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6"></div>
                            <div class="form-group col-md-6">
                                <select name="console" id="show" class="form-control" required="required" onchange="change()">
                                    <option value='' disabled selected style='display:none;'>Console</option>
                                    <option value="1">PC</option>
                                    <option value="2">PS3</option>
                                    <option value="3">XBox</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <!-- text area -->
<<<<<<< HEAD
                                <textarea id="text_area" name="descr" class="form-control" type="text" placeholder="Descrizione" rows="8""></textarea>
=======
                                <textarea id="text_area" name="descrizione" class="form-control" type="text" placeholder="Descrizione" rows="8""></textarea>
>>>>>>> 23a48a7ad4b5c395f1fe23d75019526e17590b36
                                <br>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="sviluppatore" class="form-control" required="required" placeholder="Sviluppatore">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="path" class="form-control" required="required" placeholder="Path Immagine">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="prezzo" class="form-control" required="required" placeholder="Prezzo">
                            </div>
                            <div class="form-group col-md-6">
<<<<<<< HEAD
                                <input type="text" name="qt" class="form-control" required="required" placeholder="Quantità">
=======
                                <input type="text" name="quantita" class="form-control" required="required" placeholder="Quantità">
>>>>>>> 23a48a7ad4b5c395f1fe23d75019526e17590b36
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Inserisci">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-page-->

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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>