<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Scharvis - une solution domotique pour les particuliers</title>
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
            <?php include('header.inc.php'); ?>
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>F.A.Q.</h2>
                            <p>Voici quelques questions fréquente à propos de Scharvis. Veuillez en prendre connaissance si vous avez une question ou un problème.</p>
                            <hr class="margin-vert-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active in fade" id="faq">
                                            <div class="panel-group" id="accordion">
                                                <!-- FAQ Item -->
                                                <div class="panel panel-default panel-faq">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub">
                                                            <h4 class="panel-title">
                                                                Sur quelle prateforme est disponible Scharvis?
                                                                <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="faq-sub" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Scharvis est disponible sur iOS, Android et Windows phone ainsi que sur sa plateforme web.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default panel-faq">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-2">
                                                            <h4 class="panel-title">
                                                                Quand sera disponible Scharvis?
                                                                <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="faq-sub-2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Scharvis est encore en phase de développement, une version beta a été testé et les bugs en cours de correction.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default panel-faq">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-3">
                                                            <h4 class="panel-title">
                                                                J'ai des animaux à la maison, que se passera t'il avec les detecteurs de mouvements?
                                                                <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="faq-sub-3" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Les detecteurs de mouvements seront réglables en sensibilités en fonctions de vos  besoins, vous pourez faire en sorte que celui ci ne detecte pas votre animal.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default panel-faq">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-4">
                                                            <h4 class="panel-title">
                                                                Combien coutera Scharvis?
                                                                <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="faq-sub-4" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            L'application sera gratuite, quant au matériel, nous n'avons pas encore d'information concernant le prix de celui ci.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default panel-faq">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-5">
                                                            <h4 class="panel-title">
                                                                Puis-je tester Scharvis?
                                                                <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="faq-sub-5" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Nous sommes en train de préparer une vague de teste avec des utilisateurs, dès que nous auront la possibilité de faire tester notre matériel nous proposeront un formulaire de demande de teste sur le site.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="margin-bottom-10">Vous ne trouvez toujours pas de réponse à votre question?</h3>
                                    <p> Si votre question ou demande ne figure pas dans la liste ci dessous, vous pouvez nous contacter grâce au formulaire de contact.</p>
                                    <button type="button" class="btn btn-primary btn-sm" onClick="parent.location='contact.php'">POSER UNE QUESTION</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('footer.inc.php'); ?>
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    </body>
</html>