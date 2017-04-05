<?php
    include "header.inc.php"; 
    include "classes/house.php";  ?>
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Mes Salles</h2>
                            <p>Vous trouverez ci dessous les différentes pièces de votre maisons ainsi que les équipements présents dans les pièces.</p>
                            <hr class="margin-vert-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active in fade" id="faq">
                                            <div class="panel-group" id="accordion">
                                                <!-- Faq Item -->
                                                <div class="panel panel-default panel-faq">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub-0">
                                                            <h4 class="panel-title">
                                                                Tous les objets
                                                                <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="faq-sub-0" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <a class="btn btn-primary btn-sm" href="">Allumer toutes les lumières</a>
                                                            <a class="btn btn-primary btn-sm" href="">Eteindre toutes les lumières</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                    $curl = curl_init();
                                                    curl_setopt_array($curl, array(
                                                    CURLOPT_RETURNTRANSFER => 1,
                                                    CURLOPT_URL => '127.0.0.1:4567/rooms?token=' . $_SESSION["token"],
                                                    CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
                                                    $resp = curl_exec($curl);
                                                    $house = new House($resp);
                                                    $house->displayCompleteHouseAsList();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_SESSION["isAdmin"]) { ?>
                                <div class="col-md-4">
                                    <h3 class="margin-bottom-10">Vous souhaitez créer une nouvelle salle?</h3>
                                    <form action="scripts/addRoom.php" method="post">Ajouter une Salle
                                        </br>
                                        <input type='text' name='name' class="form-control" placeholder="Nom de la Salle" required>
                                        <select name="type" class="form-control">
                                        <option value="bathroom">Salle de bain</option>
                                        <option value="bedroom">Chambre</option>
                                        <option value="livingroom">Séjour</option>
                                        <option value="kitchen">Cuisine</option>
                                        <option value="restroom">Toilette</option>
                                        <option value="attic">Grenier</option>
                                        <option value="garage">Garage</option>
                                        </select>
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