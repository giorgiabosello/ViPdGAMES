<?php
session_start();
require_once("config/config.db.php");
if (isset($_SESSION["admin"]) || $_SESSION["admin"] == 1){
    $user = $_GET["id"];
    $query = "SELECT * FROM utenti WHERE login = '$user'"; //Query per dati dell'utente
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Account | ViPd GAMES</title>
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

<section>
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li class="active">Account</li>
            </ol>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">ACCOUNT</h2>
                    <br>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="images/account/user-profile-picture-placeholder.jpg" class="profile" alt="Immagine personale" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="panel-body" align="middle">
                            <!-- non visibile su layout a bassa risoluzione: hidden-xs -->
                            <div class="purchase-item-details hidden-xs">
                                <div class="table-responsive">
                                    <table class="table">
                                        <form action="config/modify.php" method="post">
                                            <br>
                                            <tr>
                                                <td>Username</td>
                                                <td><input value="<?php echo "$line[login]"?>" type="text" name="username" disabled></td>
                                            </tr>
                                            <tr>
                                                <td><label>e-mail</label></td>
                                                <td><input value="<?php echo "$line[email]"?>" type="text" name="email"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Telefono</label></td>
                                                <td><input value="<?php echo "$line[telefono]"?>" type="text" name="telefono"</td>
                                            </tr>
                                            <td><label>Nome</label></td>
                                            <td><input value="<?php echo "$line[nome]"?>" type="text" name="nome"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Cognome</label></td>
                                                <br>
                                                <td><input value="<?php echo "$line[cognome]"?>" type="text" name="cognome"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Indirizzo (residenza)</label></td>
                                                <td><input value="<?php echo "$line[indirizzo]"?>" type="text" name="indirizzo"</td>
                                            </tr>
                                            <tr>
                                                <td><label>C.A.P.</label></td>
                                                <td><input value="<?php echo "$line[cap]"?>" type="text" name="cap"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Citta'</label></td>
                                                <td><input value="<?php echo "$line[citta]"?>" type="text" name="citta"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Provincia</label></td>
                                                <td><input value="<?php echo "$line[provincia]"?>" type="text" name="provincia"</td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                                <input type="submit" class="btn btn-default" value="Modifica Informazioni">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
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
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>

</html>
