<?php
    include "header.inc.php"; 
    include "scripts/connexion.php";
    include "classes/house.php"; ?> 
            <div id="icons" class="bottom-border-shadow">
                <div class="container background-grey bottom-border">
                    <div class="row padding-vert-60">
                        <!-- Icons -->
                        <div class="text-center">
                            <h2 class="padding-top-10 animate fadeIn">Bienvenue</h2></br>
                            <p class="animate fadeIn">Vous êtes actuellement sur la page d'accueille de votre module Scharvis.</p>
                            <p class="animate fadeIn">L'équipe de Scharvis vous invite à changer votre mot de passe juste après votre première connexion.</p>
                            <p class="animate fadeIn">Pour toute demande de création de compte ou d'oublie de mot de passe, addressez vous à votre administrateur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if (!isset($_SESSION["user"])) {
            ?>
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
                    <div class="row margin-vert-30">
                        <!-- Login Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="login-page" action="scripts/connexion.php" method="post">
                                <div class="login-header margin-bottom-30">
                                    <h2>Connectez vous à votre compte</h2>
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input id="username" class="form-control" placeholder="Numéro de téléphone" name="username" type="text" size="18" alt="login" required />
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input placeholder="Mot de passe" class="form-control" id="passwd" class="form-control" name="password" type="password" size="18" alt="password" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <button class="btn btn-primary pull-right" type="submit" name="signin" alt="sign in">Login</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary pull-right" onClick="parent.location='pages-sign-up.php'">Créer un compte</button>
                                    </div>
                                </div>
                            </form>
                        </div>





                        <?php } else {
                            //$curl = curl_init();
                            //curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
                            //CURLOPT_URL => '127.0.0.1:4567/rooms?token=' . $_SESSION["token"],
                            //CURLOPT_USERAGENT => 'Codular Sample cURL Request'
                            //        ));
                            //        $resp = curl_exec($curl);
                            //        $house = new House($resp);
                            //        $house->displayHouse();
                            
                            ?>
                            <div id="content" class="bottom-border-shadow">
                                <div class="container background-white bottom-border">
                                    <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                            <form class="login-page" action="scripts/connexion.php" method="post">
                                                <div class="login-header margin-bottom-30">
                                                    <h2>Changer de mot de passe</h2>
                                                </div>
                                                <div class="input-group margin-bottom-20">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                    <input name="password" class="form-control" placeholder="Nouveau mot de passe" type="password" required />
                                                </div>
                                                <div class="input-group margin-bottom-20">
                                                    <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                    <input name="password-confirmed" class="form-control" placeholder="Confirmer nouveau mot de passe" type="password" required >
                                                </div>
                                            <div class="row">
                                        <div class="col-md-5">
                                        <button class="btn btn-primary pull-right" type="submit">Modifier</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary pull-right" onClick="parent.location='pages-sign-up.php'">Créer un compte</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                            <?php } ?>
                    </div>
                </div>
            </div>
        <?php include('footer.inc.php'); ?>
</html>
