<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
        <head>
                <title>Scharvis</title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <meta charset="utf-8"/>
                <link rel="stylesheet" media="screen" type="text/css" title="Design"
href="design/style.css" />
        </head>
        <?php include "header.inc.php";?>
    <?php include "classes/accounts.php";?>
    <?php include "classes/house.php";?>
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Mes comptes</h2>
                            <p>Vous trouverez ci dessous les différentes comptes utilisateurs et administrateurs de votre maisons.</p>
                            <hr class="margin-vert-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active in fade" id="faq">
                                            <div class="panel-group" id="accordion">
                                                <!-- Faq Item -->
                                                <?php 
                                                    $accounts = new Accounts();
                                                    $accounts->displayAccounts();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_SESSION["isAdmin"]) { ?>
                                <div class="col-md-4">
                                    <h3 class="margin-bottom-10">Ajouter un nouvel utilisateur</h3>
                                    <form action="scripts/addUser.php" method="post">
                                        </br>
                                        <input type="text" class="form-control" placeholder="Nom" name="name">
                                        <input type="text" class="form-control" placeholder="Numéro de téléphone" name="phonenumber">
                                        <input type="date" class="form-control" placeholder="Date de naissance" name="birthdate">
                                        <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                                        <input type="password" class="form-control" placeholder="Confirmation de mot de passe" name="confirmation">
                                        <input type="checkbox" placeholder="isAdmin?" name="admin"> Compte administrateur
                                        <button type="submit" class="btn btn-primary btn-sm">Créer</button>
                                    </form>
                                </div>
                                <?php }?>
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
<!-- === END FOOTER === -->