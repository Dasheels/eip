<?php
    include "header.inc.php";  ?>
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Votre compte</h2>
                            <p>Vous trouverez ci dessous les différents informations sur votre compte.</p>
                            <hr class="margin-vert-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active in fade" id="faq">
                                            <div class="panel-group" id="accordion">
                                                <div class="col-md-12">
                                                    <form action="" method="post">Compte à modifier
                                                        </br>
                                                        <select name="type" class="form-control">
                                                            <option value="bathroom">Compte 1</option>
                                                            <option value="bedroom">Compte 2</option>
                                                            <option value="livingroom">Compte 3</option>
                                                            <option value="kitchen">Compte 4</option>
                                                            <option value="restroom">Compte 5</option>
                                                            <option value="attic">Compte 6</option>
                                                            <option value="garage">Compte 7</option>
                                                        </select>
                                                        <input type="text" class="form-control" placeholder="Nouveau nom" name="name">
                                                        <input type="text" class="form-control" placeholder="Nouveau numéro de téléphone" name="phonenumber">
                                                        <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="password">
                                                        <input type="password" class="form-control" placeholder="Confirmation de mot de passe" name="confirmation">
                                                        <input type="checkbox" placeholder="isAdmin?" name="admin"> Compte administrateur </br>
                                                        <button type="submit" class="btn btn-primary btn-sm">Modifier</button>
                                                    </form>
                                                </div>
                                                <!-- Faq Item -->
                                            </div>
                                        </div>
                                    </div>
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
<!-- === END FOOTER === -->
