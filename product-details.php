<?php
$codice = '1001'; //PER MICHELE: Inserisci qui il codice tra virgolette del gioco che dev'essere identico al record nel DB
require_once("config.db.php"); //importo il file con connessione
$query = "SELECT * FROM videogiochi WHERE codice = '$codice'"; //Query per dati del gioco
$result = pg_query($dbconn,$query) or die('Query fallita: 
' . pg_last_error()); // Risultati $query
$line = pg_fetch_array($result, null, PGSQL_ASSOC); //Array con i dati di $result
$query_img = "SELECT * FROM foto WHERE foto.codice = '$codice'"; //Query per foto del gioco
$result_img = pg_query($dbconn,$query_img) or die('Query fallita: 
' . pg_last_error()); // Risultati $query_img
$line_img = pg_fetch_array($result_img, null, PGSQL_ASSOC); //Array con i dati di $result
$querydev = "SELECT * FROM videogiochi WHERE sviluppo = '$line[titolo]'";
?>

<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Dettagli Prodotto | ViPd GAMES</title>
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
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
                            <img src="images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src=<?php echo "$line_img[path]"?> class="games-preview img-responsive" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                        <a href=""><img src="http://placehold.it/85x84" class="details-preview img-responsive" alt="" />
                                        </a>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo "$line[titolo]"?></h2>
                                <p>Codice: <?php echo "$line[codice]"?></p>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
									<span>€<?php echo "$line[prezzo]"?></span>
                                <label>Quantity:</label>
                                <input type="text" value="1" />
                                <button type="button" class="btn btn-default cart">
                                    <i class="fa fa-shopping-cart"></i> Acquista
                                </button>
                                </span>
                                <p><b>Disponibilità: </b> <?php echo "$line[quantita]"?></p>
                                <p><b>Condizione: </b> Nuovo arrivo</p>
                                <p><b>Sviluppatore: </b> <?php echo "$line[sviluppo]"?></p>
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" />
                                </a>
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#companyprofile" data-toggle="tab">Sviluppatore</a>
                                </li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Valutazioni (11010)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="companyprofile">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://placehold.it/208x183" alt="" />
                                                <h2>€50</h2>
                                                <p>The Witcher</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://placehold.it/208x183" alt="" />
                                                <h2>€59,99</h2>
                                                <p>The Witcher II</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al Carrello</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://placehold.it/208x183" alt="" />
                                                <h2>€45</h2>
                                                <p>Cyberpunk 2077</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="http://placehold.it/208x183" alt="" />
                                                <h2>€50</h2>
                                                <p>The Witcher Battle Arena</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>CHRIS</a>
                                        </li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a>
                                        </li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>12 AGO 2015</a>
                                        </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p><b>Scrivi la tua recensione</b>
                                    </p>

                                    <form action="#">
                                        <span>
											<input type="text" placeholder="Tuo Nome"/>
											<input type="email" placeholder="Indirizzo Email"/>
										</span>
                                        <textarea name=""></textarea>
                                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right">
                                            Invia
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items">
                        <!--recommended_items-->
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
        $("#footer").load("footer.html");
    </script>
    <script>
        $("#navbar").load("navbar.html");
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
