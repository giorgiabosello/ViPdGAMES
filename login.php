<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Login | ViPd GAMES</title>
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

    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">Effettua il login!</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div id="legend">
                    <legend>Nuovo membro</legend>
                </div>
                <div class="offer offer-default">
                    <div class="text">
                        Creando un account sul nostro sito, sarai in grado di comprare più velocemente, controllare lo stato e lo storico dei tuoi ordini.
                    </div>
                    <div class="buttons" style="margin-top:80px">
                        <input class="button-1 register-button btn btn-primary " onclick="location.href='register.php'" value="Registrati" type="button">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="fieldset">
                    <div id="legend">
                        <legend>Già membro</legend>
                    </div>
                    <div class="offer offer-default">
                        <div class="">
                            <form novalidate="novalidate" action="/login" method="post">
                                <div class="text-danger">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="">
                                            <label class="" for="Email">Email:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input autofocus="autofocus" class="email gray-input" id="Email" name="Email" value="" type="text">
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <div class="">
                                            <label class="" for="Password">Password:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="password gray-input" id="Password" name="Password" type="password">
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group reversed">
                                    <input id="RememberMe" name="RememberMe" value="true" type="checkbox">
                                    <input name="RememberMe" value="false" type="hidden">
                                    <label for="RememberMe">Ricordami?</label>
                                    <span class="forgot-password">
                                        <a href="">Password dimenticata?</a>
                                    </span>
                                </div>
                                <div class="buttons">
                                    <input class="button-1 login-button btn btn-primary" value="Log in" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/form-->
<br>

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