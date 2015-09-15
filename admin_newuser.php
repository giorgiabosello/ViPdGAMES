<?php
session_start();
require_once("config/config.db.php"); //importo il file con connessione
if (isset($_SESSION["admin"]) || $_SESSION["admin"] == 1){
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
    <?php echo "ciao" ?>
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
            <h2 class="title text-center">Registra Utente!</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form novalidate="novalidate" action="config/newuser.php" method="post">
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
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'nome') echo "style='color: red'"; ?> class="" for="Nome">Nome(min 1, max 10 caratteri):</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input class="gray-input" data-val="true" data-val-required="Inserire il proprio nome." name="nome" value="<?php echo "$_GET[nome]";?>" type="text">
                                    <?php if(strlen($nome) < 1 || strlen($nome) > 10)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=nome&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <span class="required">*</span>
                                    <span class="field-validation-valid" data-valmsg-for="Nome" data-valmsg-replace="true"></span>
                                </div>

                            </div>

                            <!-- COGNOME -->

                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'cognome') echo "style='color: red'"; ?> class="" for="LastName">Cognome(min 1, max 20 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Inserire il proprio cognome." name="cognome" value="<?php echo "$_GET[cognome]";?>" type="text">
                                    <?php if(strlen($cognome) < 1 || strlen($cognome) > 20)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=cognome&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <span class="required">*</span>
                                    <span class="field-validation-valid" data-valmsg-for="Cognome" data-valmsg-replace="true"></span>
                                </div>

                            </div>

                            <!-- TELEFONO -->

                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'telefono') echo "style='color: red'"; ?> class="" for="Telefono">Telefono(min 1, max 15 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Telefono necessario."  name="telefono" value="<?php echo "$_GET[telefono]";?>" type="text">
                                    <?php if(strlen($telefono) < 1 || strlen($telefono) > 15)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=telefono&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <span class="required">*</span>
                                    <span class="field-validation-valid" data-valmsg-for="Telefono" data-valmsg-replace="true"></span>
                                </div>

                            </div>

                            <!-- INDIRIZZO -->

                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'indirizzo') echo "style='color: red'"; ?> class="" for="Indirizzo">Indirizzo(min 1, max 20 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Inserire il proprio indirizzo"  name="indirizzo" value="<?php echo "$_GET[indirizzo]";?>" type="text">
                                    <?php if(strlen($indirizzo) < 1 || strlen($indirizzo) > 20)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=indirizzo&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <span class="required">*</span>
                                    <span class="field-validation-valid" data-valmsg-for="Indirizzo" data-valmsg-replace="true"></span>
                                </div>

                            </div>

                            <!-- CAP -->

                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['cap']) && $_GET['err'] == 'nome') echo "style='color: red'"; ?> class="" for="CAP">CAP(6 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Inserire il CAP."  name="cap" value="<?php echo "$_GET[cap]";?>" type="text">
                                    <?php if(strlen($cap) != 5)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=cap&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <span class="required">*</span>
                                    <span class="field-validation-valid" data-valmsg-for="CAP" data-valmsg-replace="true"></span>
                                </div>

                            </div>

                            <!-- CITTA' -->

                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'citta') echo "style='color: red'"; ?> class="" for="Città">Città(min 1, max 25 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Città necessaria."  name="citta" value="<?php echo "$_GET[citta]";?>" type="text">
                                    <?php if(strlen($citta) < 1 || strlen($citta) > 25)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=citta&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <span class="required">*</span>
                                    <span class="field-validation-valid" data-valmsg-for="Città" data-valmsg-replace="true"></span>
                                </div>

                            </div>

                            <!-- PROVINCIA -->

                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'prov') echo "style='color: red'"; ?> class="" for="Prov">Provincia(min 1, max 25 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Provincia necessaria."  name="prov" value="<?php echo "$_GET[prov]";?>" type="text">
                                    <?php if(strlen($prov) < 1 || strlen($prov) > 25)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=prov&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
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
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'email') echo "style='color: red'"; ?> class="" for="Email">Email(min 1, max 80 caratteri):</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-email="Email sbagliata." data-val-required="Email necessaria."  name="email" value="<?php echo "$_GET[email]";?>" type="text">
                                    <?php if(strlen($email) < 1 || strlen($email) > 80)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=email&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
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
                            <?php if(isset($_GET['err']) && $_GET['err'] == 1) echo "<p style='color: red'>Le 2 password non sono identiche, riprova!</p>"; ?>
                            <?php if(isset($_GET['err']) && $_GET['err'] == 2) echo "<p style='color: red'>Username già preso, provane uno nuovo!</p>"; ?>
                            <div class="form-group row">
                                <div class="col-md-2 ">
                                    <label <?php if(isset($_GET['err']) && $_GET['err'] == 'login') echo "style='color: red'"; ?> class="" for="Login">Login:</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="gray-input" data-val="true" data-val-required="Last name is required." name="login" value="" type="text">
                                    <?php if(strlen($login) < 1 || strlen($login) > 15)
                                        echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=login&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                    ?>
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
                                        <label <?php if(isset($_GET['err']) && $_GET['err'] == 'psw') echo "style='color: red'"; ?> class="" for="psw">Password:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="gray-input" data-val="true" data-val-required="Password necessaria." name="psw" value="" type="password">
                                        <?php if(strlen($psw) < 1 || strlen($psw) > 15)
                                            echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=psw&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                        ?>
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
                                        <input class="gray-input" data-val="true" data-val-equalto="Le password non corrispondono. Controlla." data-val-equalto-other="*.Password" data-val-required="Password necessaria." id="ConfirmPassword" name="psw2" value="" type="password">
                                        <?php if(strlen($psw) < 1 || strlen($psw) > 15)
                                            echo "<script language=javascript>document.location.href=\"../admin_newuser.php?err=psw&nome=$nome&cognome=$cognome&telefono=$telefono&indirizzo=$indirizzo&cap=$cap&citta=$citta&prov=$prov&email=$email\"</script>";
                                        ?>
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