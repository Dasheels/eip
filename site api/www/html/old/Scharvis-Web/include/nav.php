
<div>

<br></br>
<br></br>

<div id="conteneur_1">

<div id="banniere"></div> 

<br></br>
<br></br>


<div id="conteneur_2">


<div id="corps">
<ul id="MH"> 



<?php 
error_reporting(E_A);
ini_set("display_errors", E_ALL);
    function displayMeteo(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => '127.0.0.1:4567/meteo',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $resp = curl_exec($curl); 
        $temp = json_decode($resp, true);
        echo  "Température" .$temp["main"]["temp"] . "°c";
    }
    session_start(); 
    if (isset($_SESSION["user"])){
   ?>    
          <?php/* echo $_SESSION["name"];*/ ?>
        <a href="index.php">Home Page</a>
        <a href="account.php">Account</a>
<?php 
    if ($_SESSION["isAdmin"] == 1 || $_SESSION["isAdmin"] == true) {
?>
        <a href="params.php">House Parameters</a>
        <a href="#">Camera</a>
<?php
    } 
?>    
    <a href="scripts/logout.php">Log Out</a>
<?php displayMeteo();?>
<?php  } ?>

</ul> 
</div> 
</div> 
</div> 
</div> 
</div>
</div>
