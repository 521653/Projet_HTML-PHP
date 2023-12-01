<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Aircv" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>CV_de_M3</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <style>
        th,
        td {
            border: 1px solid hsl(188, 84%, 80%);
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            padding: 5px;
            background-color: #f0f0f0;
            border-radius: 8px;

        }

        table {
            margin: auto;
            justify-content: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<!-- END HEAD -->

<!-- BODY -->

<body id="body" data-spy="scroll" data-target=".header">

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                            <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="presentation.html">Presentation</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="experience.html">Experience</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="divers.html">Divers</a></li>
                            <li class="js_nav-item nav-item" id="has-sous-nav"><a class="nav-item-child nav-item-hover" href="cursus.html">Cursus</a>
                                <ul class="sous-nav">
                                    <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="cycle_primaire.html">Cycle primaire</a></li>
                                    <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="cycle_moyen.html">Cycle moyen</a></li>
                                    <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="cycle_secondaire.html">Cycle secondaire</a></li>
                                    <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="cycle_universitaire.html">Cycle universitaire</a></li>
                                </ul>
                            </li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="message.php">Message</a></li>

                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <br><br><br><br><br><br><br><br><br><br>

    <div>
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Supression</h2>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="row row-space-2 margin-b-4">
                            <?php
                             require 'connexion.php';
                             $req = $conn->prepare("DELETE  FROM mbayem_message WHERE num_tel=". $_GET['tel']."" );
                             $req->execute();
                    
                             if (!$req) {
                                echo 'Erreur lors de l\'execution de la requete';
                            } else {
                                echo "La suppression du visiteur à été fait par succés";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Contact -->
    <div id="contact">
        <div class="bg-color-sky-light">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Mes coordonnées</h2>
                            <p>c'est moi.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 md-margin-b-30">
                                <h5 class="service-icon icon-location-pin"></h5>
                                <a href="#">Nema, Ziguinchor</a>
                            </div>
                            <div class="col-md-3 col-xs-6 md-margin-b-30">
                                <h5 class="service-icon icon-call-in"></h5>
                                <a href="#">+221 77 013 32 68</a>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <h5 class="service-icon icon-login"></h5>
                                <a href="mailto:#">az280401@gmail.com</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
    <script src="vendor/jquery.appear.js" type="text/javascript"></script>
    <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
    <script src="js/components/masonry.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>

</body>

</html>