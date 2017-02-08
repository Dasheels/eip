<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Scharvis - Votre marjordome en ligne</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php" title="">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-th">Accueil</a>
                                    </li>
                                    <?php 
                                    error_reporting(E_ALL);
                                    ini_set("display_errors", E_ALL);
                                    function displayMeteo()
                                    {
                                        $curl = curl_init();
                                        curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
                                        CURLOPT_URL => '192.168.1.219:4567/meteo',
                                        CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
                                        $resp = curl_exec($curl); 
                                        $temp = json_decode($resp, true);
                                        echo  "Temp " .$temp["main"]["temp"] . "°c";
                                    }
                                    session_start();
                                    if (isset($_SESSION["user"])) { ?>
                                    <li>
                                        <span class="fa-home">Ma maison</span>
                                        <ul>

                                            <?php if ($_SESSION["isAdmin"] == 1 || $_SESSION["isAdmin"] == true) { ?>

                                                <li>
                                                    <a href="compte.php">Mon compte</a>
                                                </li>
                                            <?php } ?>
                                            <li>
                                                <a href="maison.php">Mes Salles</a>
                                            </li>
                                            <li>
                                                <a href="camera.html">Système de surveillance</a>
                                            </li>
                                            <li>
                                                <a href="logs.php">Historique</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a><?php displayMeteo();?></a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a href="contact.php" class="fa-comment">Contact</a>
                                    </li>
                                    <?php if (isset($_SESSION["user"])) { ?>
                                    <li>
                                        <a class="fa-sign-out" href="scripts/logout.php">Déconnexion</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-twitter">
                                    <a href="https://twitter.com/scharvis_eip" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="https://www.facebook.com/Scharvis/" target="_blank" title="Facebook"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
