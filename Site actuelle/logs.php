        <?php include('header.inc.php'); ?>
        <?php include "classes/history.php";?>
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-40">
                        <div class="col-md-10">
                            <h2 class="padding-bottom-10">Historique des actions :</h2>
                            <!-- Default Blockquote -->
                            
                            <?php
                                error_reporting(E_ALL);
                                ini_set("display_errors", E_ALL);
                                $history = new History($_SESSION["user"]); 
                                $history->displayHistory();
                            ?>
                            <!--
                            <blockquote>
                                <p>
                                    <em>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</em>
                                </p>
                                <small>Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </small>
                            </blockquote>
                        -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
        <?php include('footer.inc.php'); ?>
    </body>
</html>
<!-- === END FOOTER === -->