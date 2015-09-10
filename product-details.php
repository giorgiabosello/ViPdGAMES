<?php $codice='1001' ; //PER MICHELE: Inserisci qui il codice tra virgolette del gioco che dev 'essere identico al record nel DB
require_once("config.db.php"); //importo il file con connessione
$query = "SELECT * FROM videogiochi WHERE codice = '$codice '"; //Query per dati del gioco
$result = pg_query($dbconn,$query) or die('Query fallita: ' . pg_last_error()); // Risultati $query
$line = pg_fetch_array($result, null, PGSQL_ASSOC); //Array con i dati di $result
$query_img = "SELECT * FROM foto WHERE foto.codice = '$codice '"; //Query per foto del gioco
$result_img = pg_query($dbconn,$query_img) or die('Query fallita: ' . pg_last_error()); // Risultati $query_img
$line_img = pg_fetch_array($result_img, null, PGSQL_ASSOC); //Array con i dati di $result
$querydev = "SELECT * FROM videogiochi WHERE sviluppo = '$line[titolo] '";
?>

<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Dettagli Prodotto | ViPd GAMES</title> <!-- MICHELE qui potresti mettere il nome del gioco al posto di "Dettagli Prodotto" -->
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
                                <img src=<?php echo "$line_img[path]"?> class="games-preview img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="../images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo "$line[titolo]"?></h2>
                                <p>Codice: <?php echo "$line[codice]"?></p>
                                <img src="../images/product-details/rating.png" alt="" />
                                <span>
									<span>€<?php echo "$line[prezzo]"?></span>
                                <label>Quantity:</label>
                                <input type="text" value="1" /><button type="button" class="btn btn-default cart">
                                    <a href="#errore" class="fa fa-shopping-cart"></a> Acquista
                                </button>
                                </span>
                                <!-- ANCHORAGE ERRORE DISPONIBILITA' -->
<div id="errore" class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> La quantità richiesta supera la nostra disponibilità.
</div>
<div id="successo" class="alert alert-success"><i class="fa fa-check-circle"></i> Gioco aggiunto con successo al carrello.
</div>
<!-- /. ANCHORAGE -->
<p><b>Disponibilità: </b>
    <?php echo "$line[quantita]"?>
</p>
<p><b>Condizione: </b> Nuovo arrivo</p>
<p><b>Console: </b>
    <?php echo "$line[console]"?>
</p>
<p><b>Sviluppatore: </b>
    <?php echo "$line[sviluppo]"?>
</p>
<a href=""><img src="../images/product-details/share.png" class="share img-responsive" alt="" />
</a>
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
            <?php if($line[console]=='PC ' ){ echo "<li ><a href=\"#requisiti\ " data-toggle=\"tab\ ">Requisiti</a>"; echo "</li>"; } ?>
        </ul>
    </div>
    <div class="tab-content">
        <!--Da riempire con descrizione-->
        <div class="tab-pane fade active in" id="description">

        </div>

        <!--Da riempire con requisiti, visibile solo se console==PC-->
        <div class="tab-pane fade" id="requisiti">

        </div>
    </div>
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
<script src="../js/jquery.js"></script>
<script src="../js/jquery.scrollUp.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.prettyPhoto.js"></script>
<script src="../js/main.js"></script>
</body>

</html>