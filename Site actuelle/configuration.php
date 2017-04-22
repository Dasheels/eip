
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
        <head>
                <title>Scharvis</title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <meta charset="utf-8"/>
                <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/style.css" />
        </head>
        <?php include "header.inc.php";?>
    <?php include "classes/configurationClass.php";?>
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Panneau de configuration</h2>
                            <p>Vous trouverez ici toutes les options afin de parametrer Scharvis selon vos besoins</p>
                            <hr class="margin-vert-40">
            			    <?php 
                				include "changePwd.php";
                                echo "<hr class='margin-vert-40'>";
                				include "macAdress.php";
                                echo "<hr class='margin-vert-40'>";
                                include "changeObjectLocation.php";
                                echo "<hr class='margin-vert-40'>";
                                include "MeteoLocationOption.php";                
            			    ?>
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
