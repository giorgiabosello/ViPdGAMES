<?php
session_start();
require_once("config/config.db.php"); //importo il file con connessione
if (isset($_SESSION["auth"]) || $_SESSION["auth"] == 1){
    echo '<script language=javascript>document.location.href="myaccount.php?msg=3"</script>';
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Registrazione | ViPd GAMES</title>
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
        <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Registrazione</li>
                </ol>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center">Registrati!</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form novalidate="novalidate" action="/config/newuser.php" method="post">
                    <input name="__RequestVerificationToken" value="lPfe7IL4E9KcTgH-u3gUFG1qELDzpcfbGJWNMn9HyGbocrog_NTTh1oTmNCbbYvrKGp-yrui8gCOgtTgukquC-NUkbWVZyqP4owj5SZem7o1" type="hidden">
                    <div class="features_items my-account-page">
                        <!--features_items-->
                        <div class="custom-page-box-div">
                            <div class="message-error">
                            </div>
                            <div class="fieldset">
                                <div>
                                    <legend class="">I tuoi dettagli personali</legend>
                                </div>
                                
                                <!-- NOME -->
                                
                                <div class="form-group row ">
                                    <div class="col-md-2">

                                        <label class="" for="Nome">Nome:</label>
                                    </div>
                                    <div class="col-md-6 ">
                                        <input class="gray-input" data-val="true" data-val-required="Inserire il proprio nome." data-val-length-max="10" name="nome" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Nome" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- COGNOME -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="LastName">Cognome:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Inserire il proprio cognome." data-val-length-max="20" name="Cognome" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Cognome" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- TELEFONO -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="Telefono">Telefono:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Telefono necessario." data-val-length-max="15" name="Telefono" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Telefono" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- INDIRIZZO -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="Indirizzo">Indirizzo:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Inserire il proprio indirizzo" data-val-length-max="20" name="Indirizzo" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Indirizzo" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- CAP -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="CAP">CAP:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Inserire il CAP." data-val-length-max="6" name="CAP" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="CAP" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- CITTA' -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="Città">Città:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Città necessaria." data-val-length-max="25" name="Città" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Città" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- PROVINCIA -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="Prov">Provincia:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Provincia necessaria." data-val-length-max="25" name="Prov" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Prov" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- AMMINISTRATORE -->
                                
                                <!-- EMAIL -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label class="" for="Email">Email:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-email="Email sbagliata." data-val-required="Email necessaria." data-val-length-max="80" name="Email" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- PASSWORD -->
                            
                            <div class="fieldset">
                                <div id="legend">
                                    <legend class="">Username e Password</legend>
                                </div>
                                <!-- LOGIN -->
                                
                                <div class="form-group row">
                                    <div class="col-md-2 ">
                                        <label class="" for="Login">Login:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Last name is required." data-val-length-max="15" name="Login" value="" type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <span class="required">*</span>
                                        <span class="field-validation-valid" data-valmsg-for="Login" data-valmsg-replace="true"></span>
                                    </div>

                                </div>
                                
                                <!-- PASSWORD -->

                                <div class="form-fields">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="" for="psw">Password:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="gray-input" data-val="true" data-val-length="La password deve avere almeno 6 caratteri e massimo 15." data-val-length-max="15" data-val-length-min="6" data-val-required="Password necessaria." name="psw" value="" type="password">
                                        </div>
                                        <div class="col-md-4">
                                            <span class="required">*</span>
                                            <span class="field-validation-valid" data-valmsg-for="psw" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="" for="ConfirmPassword">Conferma password:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="gray-input" data-val="true" data-val-equalto="Le password non corrispondono. Controlla." data-val-equalto-other="*.Password" data-val-required="Password necessaria." id="ConfirmPassword" name="ConfirmPassword" value="" type="password">
                                        </div>
                                        <div class="col-md-4">
                                            <span class="required">*</span>
                                            <span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <input id="register-button" class="button-1 register-next-step-button btn btn-primary pull-right" value="Registrati" name="register-button" type="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <!--/form-->


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