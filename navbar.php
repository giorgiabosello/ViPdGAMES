<?php
session_start();
include "config/config.db.php";
if(isset($_SESSION['idordine'])){
    $query_qt_ordine = $db->query("SELECT SUM(quantita) FROM carrelli WHERE idordine = $_SESSION[idordine]");
    $line_qt_ordine = $query_qt_ordine->fetch(PDO::FETCH_ASSOC);
    $qt_carrello = $line_qt_ordine['sum'];
}
?>

<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +39 XXX XX XX XXX</a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@vipdgames.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/home/logo.png" alt="Logo" />
                        </a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                ITA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">USA</a>
                                </li>
                                <li><a href="#">UK</a>
                                </li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                EURO
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">DOLLAR</a>
                                </li>
                                <li><a href="#">POUND</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown" <?php if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1) echo "style=\"display: none\""; ?>><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                                    <?php if(!isset($_SESSION["auth"]) || $_SESSION["auth"] != 1) echo "Account"; else echo "$_SESSION[id]"; ?></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="myaccount.php">Dati Account</a>
                                    </li>
                                    <li><a href="storico.php">Storico Ordini</a>
                                    </li>
                                    <li <?php if(!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1) echo "style=\"display: none\""; ?>><a href="insert.php">Nuovo Videogioco</a>
                                    </li>
                                    <li <?php if(!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1) echo "style=\"display: none\""; ?>><a href="admin_newuser.php">Nuovo Utente</a>
                                    </li>
                                    <li <?php if(!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1) echo "style=\"display: none\""; ?>><a href="userlist.php">Elenco Utenti</a>
                                    </li>
                                    <li <?php if(!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1) echo "style=\"display: none\""; ?>><a href="orderslist.php">Elenco Ordini</a>
                                    </li>
                                </ul>
                            </li>
                            <li <?php if(!isset($_SESSION["idordine"])) echo "style=\"display: none\""; ?>><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrello<?php
                                    if($qt_carrello != NULL) echo "($qt_carrello pezzi)";?></a>
                            </li>
                            <?php
                            if(isset($_SESSION["auth"]) && $_SESSION["auth"] == 1)
                                echo "<li> <a href=\"logout.php\"><i class=\"fa fa-lock\"></i> Logout</a></li>";
                            else
                                echo "<li> <a href=\"login.php\"><i class=\"fa fa-lock\"></i> Login</a></li>";
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php" class="active">Home</a>
                            </li>
                            <li class="dropdown"><a href="shop.php">Negozio</a>
                            </li>
                            <li><a href="contact-us.php">Contatti</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <form class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="search" placeholder="Cerca" class="form-control" />
                            <div class="input-group-btn ">
                                <a class="btn btn-default" href="search.php">
                                    <span class="fa fa-search"></span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->