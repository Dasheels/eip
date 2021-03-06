<?php
    include "header.inc.php"; 
    include "classes/house.php";  ?>
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Votre pièce</h2>
                            <p>Vous trouverez ci dessous les différents équipements de votre pièce et leur statut.</p>
                            <hr class="margin-vert-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active in fade" id="faq">
                                            <div class="panel-group" id="accordion">
                                                <!-- Faq Item -->
						<?php
                                                    $room =  new Room($_GET["id"]);
                                                    $room->displayRoomContent();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_SESSION["isAdmin"]) { ?>
                                <div class="col-md-4">
                                    <h3 class="margin-bottom-10">Ajouter une nouvel équipement cette à salle :</h3>
                                    <form method="post" action="scripts/addItem.php">
                                        <select name="type" class="form-control">
                                        <option value="alarm">Alarme</option>
                                        <option value="lights">Lumière</option>
                                        <option value="shutters">Volet</option>
                                        <option value="computer">Ordinateur</option>
                                        <?php echo "<input type='hidden' name='room' value='" . $_GET["id"] . "'>"?>
                                        </select>

                                        <button type="submit" class="btn btn-primary btn-sm">Créer</button>
                                    </form>
                                </div>
                                <?php } ?>
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
