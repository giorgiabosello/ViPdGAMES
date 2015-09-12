<?php
session_start();
require_once("config/config.db.php");
//se non c'è la sessione registrata
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1){
    echo '<script language=javascript>document.location.href="login.php?err=2"</script>';
}
else{
    $username = $_SESSION["id"];
    $query = "SELECT * FROM utenti WHERE login = '$username'"; //Query per dati dell'utente
    $result = pg_query($dbconn,$query) or die('Query fallita: ' . pg_last_error()); // Risultati $query
    $line = pg_fetch_array($result, null, PGSQL_ASSOC); //Array con i dati di $result
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
                                                <br>
                                            <tr>
                                                <td>Username</td>
                                                <td><?php echo "$line[login]"?></td>
                                            </tr>
                                                <tr>
                                                    <td>e-mail</td>
                                                    <td><?php echo "$line[email]"?></td>
                                                </tr>
                                            <tr>
                                                <td>Telefono</td>
                                                <td><?php echo "$line[telefono]"?></td>
                                            </tr>
                                                    <td>Nome</td>
                                                    <td><?php echo "$line[nome]"?></td>
                                                </tr>
                                                <tr>
                                                    <td>Cognome</td>
                                                    <br>
                                                    <td><?php echo "$line[cognome]"?></td>
                                                </tr>
                                                <tr>
                                                    <td>Indirizzo (residenza)</td>
                                                    <td><?php echo "$line[indirizzo]"?></td>
                                                </tr>
                                                <tr>
                                                    <td>C.A.P.</td>
                                                    <td><?php echo "$line[cap]"?></td>
                                                </tr>
                                                <tr>
                                                    <td>Città</td>
                                                    <td><?php echo "$line[citta]"?></td>
                                                </tr>
                                                <tr>
                                                    <td>Provincia</td>
                                                    <td><?php echo "$line[provincia]"?></td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>

                                <!-- visibile su layout a bassa risoluzione: visible-xs -->

                                <div class="purchase-item-details visible-xs">
                                    <div class="table-responsive">
                                        <br>
                                        <tr>
                                            <td>e-mail</td>
                                        </tr>
                                        <br>
                                        <tr>
                                            <td><?php echo "$line[email]"?></td>
                                        </tr>
                                        <br>
                                        <br>
                                        <tr>
                                            <td>Nome</td>
                                                </tr>
                                                <br>
                                                <tr>
                                                    <td><?php echo "$line[nome]"?></td>
                                                </tr>
                                                <br>
                                                <br>
                                                <tr>
                                                    <td>Cognome</td>
                                                </tr>
                                                <br>
                                                <tr>
                                                    <td><?php echo "$line[cognome]"?></td>
                                                </tr>
                                                <br>
                                                <br>
                                                <tr>
                                                    <td>Indirizzo (residenza)</td>
                                                </tr>
                                                <br>
                                                <tr>
                                                    <td><?php echo "$line[indirizzo]"?></td>
                                                </tr>
                                                <br>
                                                <br>
                                                <tr>
                                                    <td>C.A.P.</td>
                                                </tr>
                                                <br>
                                                <tr>
                                                    <td><?php echo "$line[cap]"?></td>
                                                </tr>
                                                <br>
                                                <br>
                                                <tr>
                                                    <td>Città</td>
                                                </tr>
                                                <br>
                                                <tr>
                                                    <td><?php echo "$line[citta]"?></td>
                                                </tr>
                                                <br>
                                                <br>
                                                <tr>
                                                    <td>Provincia</td>
                                                </tr>
                                                <br>
                                                <tr>
                                                    <td><?php echo "$line[provincia]"?></td>
                                                </tr>
                                                <br>
                                                <br>
                                    </div>
                                </div>

                                <p><a class="btn btn-default" href="myaccount_modify.php" role="button">Modifica informazioni</a>
                                </p>
                                <?php if($_GET['msg'] == 1) echo "<p style='color: green'> Dati modificati con successo!</p>" ?>
                                <?php if($_GET['msg'] == 2) echo "<p style='color: red'> Solo gli admin possono inserire nuovi giochi!</p>" ?>

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