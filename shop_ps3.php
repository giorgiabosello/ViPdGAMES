<?php
session_start();
require_once("config/config.db.php");
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Negozio | ViPd GAMES</title>
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
                <li class="active">Negozio</li>
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
                    <div class="shipping text-center">
                        <!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div>
                    <!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Negozio</h2>
                    <?php foreach($db->query("SELECT * FROM videogiochi WHERE console = 'Ps3'") as $record) {?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src = "pages/<?php echo "$record[path]"?>" class="games img-responsive" alt = "" />
                                        <h2 ><?php echo "$record[prezzo]"?> </h2 >
                                        <p > <?php echo "$record[titolo]"?> </p >
                                        <a href = "pages/product-details.php?cod=<?php echo "$record[codice]"?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart" ></i > Maggiori Dettagli </a >
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2 ><?php echo "$record[prezzo]"?> </h2 >
                                            <p > <?php echo "$record[titolo]"?> </p >
                                            <a href = "pages/product-details.php?cod=<?php echo "$record[codice]"?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart" ></i > Maggiori Dettagli </a >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <!--features_items-->
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
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>

</html>