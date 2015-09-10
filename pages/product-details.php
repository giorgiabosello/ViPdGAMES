<?php 
$codice='1001' ; //PER MICHELE: Inserisci qui il codice tra virgolette del gioco che dev 'essere identico al record nel DB
require_once("config.db.php"); //importo il file con connessione
$query = "SELECT * FROM videogiochi WHERE codice = '$codice'"; //Query per dati del gioco
$result = pg_query($dbconn,$query) or die('Query fallita: ' . pg_last_error()); // Risultati $query
$line = pg_fetch_array($result, null, PGSQL_ASSOC); //Array con i dati di $result
if(isset($_POST["qt"])){
    if($_POST["qt"] > $line[quantita]){
        $color = red;
        $string = "Spiacente, la quantità massima ordinabile è: $line[quantita]";
    }
    else{
        $color = green;
        $string = "Aggiunti $line[quantita] prodotti al carrello!";
    }
}
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
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categorie</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#pc">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											PC
										</a>
									</h4>
                                    </div>
                                    <div id="pc" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Azione/Avventura</a>
                                                </li>
                                                <li><a href="#">RPG</a>
                                                </li>
                                                <li><a href="#">Simulazione</a>
                                                </li>
                                                <li><a href="#">Sparatutto</a>
                                                </li>
                                                <li><a href="#">Sport</a>
                                                </li>
                                                <li><a href="#">Strategia</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#ps4">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											PS4
										</a>
									</h4>
                                    </div>
                                    <div id="ps4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Azione/Avventura</a>
                                                </li>
                                                <li><a href="#">RPG</a>
                                                </li>
                                                <li><a href="#">Simulazione</a>
                                                </li>
                                                <li><a href="#">Sparatutto</a>
                                                </li>
                                                <li><a href="#">Sport</a>
                                                </li>
                                                <li><a href="#">Strategia</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#xbox">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											PS3
										</a>
									</h4>
                                    </div>
                                    <div id="xbox" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Azione/Avventura</a>
                                                </li>
                                                <li><a href="#">RPG</a>
                                                </li>
                                                <li><a href="#">Simulazione</a>
                                                </li>
                                                <li><a href="#">Sparatutto</a>
                                                </li>
                                                <li><a href="#">Sport</a>
                                                </li>
                                                <li><a href="#">Strategia</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#wii">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Xbox
										</a>
									</h4>
                                    </div>
                                    <div id="wii" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Azione/Avventura</a>
                                                </li>
                                                <li><a href="#">RPG</a>
                                                </li>
                                                <li><a href="#">Simulazione</a>
                                                </li>
                                                <li><a href="#">Sparatutto</a>
                                                </li>
                                                <li><a href="#">Sport</a>
                                                </li>
                                                <li><a href="#">Strategia</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">In Offerta</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Nuovi Arrivi</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Usato</a></h4>
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
                                    <img src="../pages<?php echo " $line[path] "?>" class="games-preview img-responsive" alt="" />
                                    <h3>ZOOM</h3>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information">
                                    <form method="post">
                                    <!--/product-information-->
                                    <img src="../images/product-details/new.jpg" class="newarrival" alt="" />
                                    <h2><?php echo "$line[titolo]"?></h2>
                                    <p>Codice:
                                        <?php echo "$line[codice]"?>
                                    </p>
                                    <span>
									<span>€<?php echo "$line[prezzo]"?></span>

                                            <label>Quantity:</label>
                                            <input <?php if(!isset($_SESSION["login"])) echo "disabled"; ?> type="text" value="1" name="qt"/>
                                            <?php if(!isset($_SESSION["login"])) echo "<p style='color: red'></br>Per ordinare devi essere registrato</p>"; ?>
                                            <button <?php if(!isset($_SESSION["login"])) echo "disabled"; ?> type="submit" class="btn btn-default cart" >
                                                <i class="fa fa-shopping-cart"></i> Acquista
                                            </button>

                                    </span>
                                    <?php
                                    if(isset($_POST["qt"])){
                                        echo "<p style='color: $color'>$string</p>";
                                    }
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
                                    if($line[console] == 'PC '){
                                        echo "<li ><a href=\"#requisiti\" data-toggle=\"tab\">Requisiti</a>";
                                        echo "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <!--Descrizione importata in automatico-->
                                <?php echo "$line[descrizione]"?>
                                    <div class="tab-pane fade active in" id="description">

                                    </div>

                                    <!--Da riempire con requisiti, visibile solo se console==PC-->
                                    <div class="tab-pane fade" id="requisiti">

                                    </div>
                            </div>
                            <!--/category-tab-->

                            <div class="recommended_items">
                                <!--recommended_items-->
                                <br>
                                <h2 class="title text-center">Giochi raccomandati</h2>

                                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="http://placehold.it/268x134" class="games-small img-responsive" alt="" />
                                                            <h2>€30</h2>
                                                            <p>Super Mario Kart</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="http://placehold.it/268x134" class="games-small img-responsive" alt="" />
                                                            <h2>€25</h2>
                                                            <p>Top Gun</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="http://placehold.it/268x134" class="games-small img-responsive" alt="" />
                                                            <h2>€56</h2>
                                                            <p>Need For Speed</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="http://placehold.it/268x134" class="games-small img-responsive" alt="" />
                                                            <h2>€35</h2>
                                                            <p>Splinter Cell</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="http://placehold.it/268x134" class="games-small img-responsive" alt="" />
                                                            <h2>€20</h2>
                                                            <p>PES 2010</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="http://placehold.it/268x134" class="games-small img-responsive" alt="" />
                                                            <h2>€50</h2>
                                                            <p>Moto GP 15</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!--/recommended_items-->

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