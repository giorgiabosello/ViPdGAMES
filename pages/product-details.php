<?php
session_start();
if(isset($_GET['cod']))
    $codice = $_GET['cod'];
else
    $codice = 1;
require_once("../config/config.db.php"); //importo il file con connessione
$query = $db->query("SELECT * FROM videogiochi WHERE codice = '$codice'"); //Query per dati del gioco
$line = $query->fetch(PDO::FETCH_ASSOC);
?>

    <html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Online Videogames Shopping Center">
        <meta name="author" content="ViPd GAMES">
        <title>
            <?php echo "$line[titolo]"?> | ViPd GAMES</title>
        <!-- MICHELE qui potresti mettere il nome del gioco al posto di "Dettagli Prodotto" -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <link href="../css/star-rating.min.css" rel="stylesheet">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/star-rating.min.js"></script>
        <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link rel="shortcut icon" href="../logo.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
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
                    <li class="active">Dettagli Prodotto</li>
                </ol>
            </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categorie</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
										<a href="shop_pc.php">PC</a>
									</h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
										<a href="shop_ps3.php">PS3</a>
									</h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
										<a href="shop_xbox.php">XBOX</a>
									</h4>
                                </div>
                            </div>
                            </div>
                            <!--/category-products-->



                            <div class="shipping text-center">
                                <!--shipping-->
                                <img src="../images/home/shipping.jpg" alt="" />
                            </div>
                            <!--/shipping-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details">
                            <!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="<?php echo "../pages$line[path]"?>" class="games-preview img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information">
                                    <form method="post" action="/vipdgames/config/carrello_add.php?cod=<?php echo "$line[codice]"?>.php">
                                    <!--/product-information-->
                                    <img src="../images/product-details/new.jpg" class="newarrival" alt="" />
                                    <h2><?php echo "$line[titolo]"?></h2>
                                        <p><b>Disponibilità: </b>
                                            <?php echo "$line[codice]"?>
                                        </p>
                                    <span>
									<span>€<?php echo "$line[prezzo]"?></span>
                                            <label>Quantity:</label>
                                            <input <?php if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1) echo "disabled"; ?> type="text" value="1" name="qt"/>
                                            <?php if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1) echo "<p style='color: red'></br>Per ordinare devi essere registrato</p>"; ?>
                                            <button <?php if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1) echo "disabled"; ?> type="submit" class="btn btn-default cart" >
                                                <i class="fa fa-shopping-cart"></i> Acquista
                                            </button>

                                    </span>
                                    <?php
                                    ?>
                                    <p><b>Disponibilità: </b>
                                        <?php echo "$line[quantita]"?>
                                    </p>
                                    <p><b>Console: </b>
                                        <?php echo "$line[console]"?>
                                    </p>
                                    <p><b>Sviluppatore: </b>
                                        <?php echo "$line[sviluppo]"?>
                                    </p>
                                    <a href=""><img src="../images/product-details/share.png" class="share img-responsive" alt="" />
                                    </a>
                                    <hr>
                                    <div>
                                        <label>Valutazione degli utenti:</label>
                                        <input id="input-2a" class="rating" value="4" data-min="0" data-max="5" data-step="0.5" data-stars=5 data-size="xs" data-show-clear="false" data-show-caption="false">
                                        </div>
                                    </form>
                                </div>
                                <!--/product-information-->
                            </div>
                        </div>
                        <!--/product-details-->

                        <div class="category-tab shop-details-tab">
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#description" data-toggle="tab">Descrizione</a>
                                    </li>
                                    <?php
                                    if($line['console'] == 'PC' || $line['console'] == 'pc'){
                                        echo "<li ><a href=\"#requisiti\" data-toggle=\"tab\">Requisiti</a>";
                                        echo "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                            <div class="tab-content">
                                    <div class="tab-pane fade active in" id="description">
                                        <!--Descrizione importata in automatico-->
                                        <?php echo "$line[descrizione]"?>
                                    </div>

                                    <!--Da riempire con requisiti, visibile solo se console==PC-->
                                    <div class="tab-pane fade" id="requisiti">

                                    </div>
                            </div>
                            <!--/category-tab-->
                        </div>
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
        <script src="../js/jquery.js"></script>
        <script src="../js/jquery.scrollUp.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.prettyPhoto.js"></script>
        <script src="../js/main.js"></script>
    </body>

    </html>