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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="code" class="form-control" required="required" placeholder="CODICE">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" required="required">
                                    <option value='' disabled selected style='display:none;'>Categoria</option>
                                    <option>Azione/Avventura</option>
                                    <option>RPG</option>
                                    <option>Simulazione</option>
                                    <option>Sparatutto</option>
                                    <option>Sport</option>
                                    <option>Strategia</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="title" class="form-control" required="required" placeholder="Titolo">
                            </div>
                            <div class="form-group col-md-6">
                                <select id="show" class="form-control" required="required" onchange="change()">
                                    <option value='' disabled selected style='display:none;'>Console</option>
                                    <option value="1">PC</option>
                                    <option value="2">PS3</option>
                                    <option value="3">XBox</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <!-- text area -->
                                <textarea id="text_area" name="message" class="form-control" type="text" placeholder="Requisiti di sistema" rows="8" style="display: none"></textarea>
                                <br>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="development" class="form-control" required="required" placeholder="Sviluppo">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="release" class="form-control" required="required" placeholder="Rilascio">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="price" class="form-control" required="required" placeholder="Prezzo">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="quantity" class="form-control" required="required" placeholder="Quantità">
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
    <script>
        function change() {
            var selectBox = document.getElementById("show");
            var selected = selectBox.options[selectBox.selectedIndex].value;
            var textarea = document.getElementById("text_area");
            if (selected === '1') {
                textarea.style.display = "block";
            } else {
                textarea.style.display = "none";
            }
        }
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