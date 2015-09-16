<?php
session_start();
require_once("config/config.db.php"); //importo il file con connessione
if(isset($_GET['search']))
    $testo = trim(pg_escape_string($dbconn, $_GET['search']));
?>
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
                                <form novalidate="novalidate" action="" method="get">
                                    <div class="basic-search">
                                        <div class="form-group row">
                                            <label class="col-md-2 control-label" for="search">Cerca:</label>
                                            <div class="col-md-6">
                                                <input class="gray-input" id="search" name="search" value="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advanced-search" id="advanced-search-block">
                                        <h2 class="title text-center">Ricerca avanzata</h2>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 control-label" for="Mid">Console:</label>
                                        <div class="col-md-6">
                                            <select class="gray-dropdown" data-val="true" data-val-number="The field Manufacturer must be a number." id="Mid" name="console">
                                                <option selected="selected" value="">Tutte</option>
                                                <option>PC</option>
                                                <option>PS3</option>
                                                <option>XBOX</option>
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
                                                    <input class="gray-input valid" value="" type="text" name="da">
                                                </div>
                                                <div class="col-md-1">A:</div>
                                                <div class="col-md-3">
                                                    <input class="gray-input" value="" type="text" name="a">
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
                    <?php
                    if(isset($testo))
                        echo "<h2>Risultati della ricerca:</h2>";
                    if(isset($testo) && $testo == "")
                        echo "<p>Spiacente, nessun risultato!</p>";
                    else if(isset($testo) && $testo != "") {
                        $arr_txt = explode(" ", $testo);
                        $sql = "SELECT * FROM videogiochi WHERE ";
                        for ($i = 0; $i < count($arr_txt); $i++) {
                            if ($i > 0) {
                                $sql .= " AND ";
                            }
                            $sql .= "(titolo LIKE '%" . $arr_txt[$i] . "%' OR descrizione LIKE '%" . $arr_txt[$i] . "%')";
                        }
                        if (isset($_GET['console']) && $_GET['console'] != ""){
                            $console = trim(pg_escape_string($dbconn, $_GET['console']));
                            $console2 = strtolower($console);
                            $sql .= " AND (console = '$console' OR console = '$console2')";
                        }
                        if (isset($_GET['da']) && $_GET['da'] != "" && isset($_GET['a']) && $_GET['a'] != ""){
                            $da = trim(pg_escape_string($dbconn, $_GET['da']));
                            $a = trim(pg_escape_string($dbconn, $_GET['a']));
                            $sql .= " AND prezzo BETWEEN '$da' and '$a'";
                        }
                        else if(isset($_GET['da']) && $_GET['da'] != "" && (!isset($_GET['a']) || $_GET['a'] == "")){
                            $da = trim(pg_escape_string($dbconn, $_GET['da']));
                            $sql .= " AND prezzo BETWEEN '$da' and '1000000'";
                        }
                        else if((isset($_GET['a']) && $_GET['a'] != "") && (!isset($_GET['da']) || $_GET['da'] == "")){
                            $a = trim(pg_escape_string($dbconn, $_GET['a']));
                            $sql .= " AND prezzo BETWEEN '0' and '$a''";
                        }
                        else{
                            $a = trim(pg_escape_string($dbconn, $_GET['a']));
                            $sql .= " AND prezzo BETWEEN '0' and '1000000'";
                        }
                        var_dump($sql);
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        try{
                            echo "inizio foreach<br>";
                            foreach($db->query($sql) as $record) {?>
                                <div class="col-sm-9 padding-right">
                        <div class="features_items">
                            <!--features_items-->
                            
                            <div class="row">
                                
                                <div class="col-md-6 inline">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="pages<?php echo "$record[path]"?>" align="middle"  alt="" />
                                                <h2>€ <?php echo "$record[prezzo]"?></h2>
                                                <p><?php echo "$record[titolo]"?></p>
                                                <p><?php echo "$record[console]"?></p>
                                                <a href = "pages/product-details.php?cod=<?php echo "$record[codice]"?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart" ></i > Maggiori Dettagli </a >
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php }
                            echo "fuori foreach<br>";
                        }catch(PDOException $e) {
                            die($e->getMessage());
                        }
                    }
                    ?>
                </div>
            </div>
            <!--/product-information-->
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