<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Videogames Shopping Center">
    <meta name="author" content="ViPd GAMES">
    <title>Checkout | ViPd GAMES</title>
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

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Check out</li>
                </ol>
            </div>
            <!--/breadcrums-->

            <div class="step-one">
                <h2 class="heading">Step1</h2>
            </div>
            <div class="checkout-options">
                <h3>Nuovo utente</h3>
                <p>Opzioni checkout</p>
                <ul class="nav">
                    <li>
                        <label>
                            <input type="checkbox"> Registrati</label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox"> Checkout come ospite</label>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-times"></i>Annulla</a>
                    </li>
                </ul>
            </div>
            <!--/checkout-options-->

            <div class="register-req">
                <p>Per favore, effettua il login o registrati per avere accesso facilmente al tuo storico ordini.</p>
            </div>
            <!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Informazioni acquirente</p>
                            <form>
                                <input type="text" placeholder="Nome visualizzato">
                                <input type="text" placeholder="User Name">
                                <input type="password" placeholder="Password">
                                <input type="password" placeholder="Confirma password">
                            </form>
                            <a class="btn btn-primary" href="">Continua</a>
                        </div>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <p>Spedisci a</p>
                            <div class="form-one">
                                <form>
                                    <input type="text" placeholder="Nome">
                                    <input type="text" placeholder="Cognome">
                                    <input type="text" placeholder="Email*">
                                    <input type="text" placeholder="Indirizzo*">
                                </form>
                            </div>
                            <div class="form-two">
                                <form>
                                    <input type="text" placeholder="Zip / Codice postale *">
                                    <select>
                                        <option>-- Stato --</option>
                                        <option>Italia</option>
                                        <option>Stati Uniti</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ucraina</option>
                                        <option>Canada</option>
                                        <option>Emirati Arabi</option>
                                    </select>
                                    <input type="password" placeholder="Confirma password">
                                    <input type="text" placeholder="Telefono">
                                    <input type="text" placeholder="Cellulare *">
                                    <input type="text" placeholder="Fax">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Ordine</p>
                            <textarea name="message" placeholder="Note per il corriere." rows="16"></textarea>
                            <label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Controllo Pagamento</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Prezzo</td>
                            <td class="quantity">Quantità</td>
                            <td class="total">Totale</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product">
                                <img src="http://placehold.it/110x110" class="cart img-responsive" alt="" />
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">The Witcher III</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>€69,99</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">€69,99</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="cart_product">
                                <img src="http://placehold.it/110x110" class="cart img-responsive" alt="" />
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">Watch Dogs</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>€25</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">€25</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <img src="http://placehold.it/110x110" class="cart img-responsive" alt="" />
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">The Last Of Us</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>€25</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">€25</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                            <td colspan="2">
                                <table class="table table-condensed total-result">
                                    <tr>
                                        <td>Totale carrello</td>
                                        <td>€ 119,99</td>
                                    </tr>
                                    <tr class="shipping-cost">
                                        <td>Costi di trasporto</td>
                                        <td>€ 0</td>
                                    </tr>
                                    <tr>
                                        <td>Totale</td>
                                        <td><span>€ 119,99</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="payment-options">
                <span>
						<label><input type="checkbox"> VISA</label>
					</span>
                <span>
						<label><input type="checkbox"> Paypal</label>
					</span>
                <span>
						<label><input type="checkbox"> Contrassegno</label>
					</span>
                <a class="btn btn-primary pull-right" href="order-complete.php">Prosegui</a>
            </div>
        </div>
    </section>
    <!--/#cart_items-->



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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
