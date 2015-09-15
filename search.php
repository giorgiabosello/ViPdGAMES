<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Ricerca | ViPd GAMES</title>
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
                    <li class="active">Cerca</li>
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
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="features_items search-page">
                        <!--features_items-->
                        <h2 class="title text-center">Cerca</h2>


                        <div class="product-details">
                            <div class="custom-page-box-div">
                                <form novalidate="novalidate" action="/search" method="get">
                                    <div class="basic-search">
                                        <div class="form-group row">
                                            <label class="col-md-2 control-label" for="Q">Cerca:</label>
                                            <div class="col-md-6">
                                                <input class="gray-input" id="Q" name="Q" value="prova" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advanced-search" id="advanced-search-block">
                                        <h2 class="title text-center">Ricerca avanzata</h2>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label" for="Mid">Console:</label>
                                        <div class="col-md-6">
                                            <select class="gray-dropdown" data-val="true" data-val-number="The field Manufacturer must be a number." id="Mid" name="Mid">
                                                <option selected="selected" value="0">Tutte</option>
                                                <option value="1">PC</option>
                                                <option value="2">PS3</option>
                                                <option value="3">XBOX</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label>Prezzo:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="price-range row">
                                                <div class="col-md-1">Da:</div>
                                                <div class="col-md-3">
                                                    <input class="gray-input valid" value="" type="text">
                                                </div>
                                                <div class="col-md-1">A:</div>
                                                <div class="col-md-3">
                                                    <input class="gray-input" value="" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="buttons">
                                <input class="button-1 search-button btn btn-primary" value="Cerca" type="submit">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/product-information-->
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
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>