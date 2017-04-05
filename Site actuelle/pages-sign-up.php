            <?php include('header.inc.php'); ?>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="scripts/addUser.php" method="post">
                                <div class="signup-header">
                                    <h2>Créer un nouveau compte</h2>
                                    <p>Déjà un compte ?
                                        <a href="index.php">Cliquez ICI </a>pour vous connecter à votre compte.</p>
                                </div>
                                <label>Nom complet</label>
                                <input class="form-control margin-bottom-20" type="text" name="name">
                                <label>Numéro de téléphone</label>
                                <input class="form-control margin-bottom-20" type="text" name="phonenumber">
				<label>Date de naissance</label>
				<input class="form-control margin-bottom-20" type="date" name="birthdate">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Mot de passe
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirmez le mot de passe
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="password" name="confirmation">
                                    </div>
                                </div>
				<label>Definir comme compte administrateur</label>
				<input type="checkbox" name="admin">
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button class="btn btn-primary" type="submit">Créer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php include('footer.inc.php'); ?>
    </body>
</html>
