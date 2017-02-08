<?php include "include/nav.php";?>
    <?php include "classes/accounts.php";?>
    <?php include "classes/house.php";?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
        <head>
                <title>Scharvis</title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <meta charset="utf-8"/>
                <link rel="stylesheet" media="screen" type="text/css" title="Design"
href="design/style.css" />
        </head>
    <body>
<div id="global">


<div>
            <h1>accounts</h1>
            <?php
                $accounts = new Accounts();
                $accounts->displayAccounts();
            ?>
            <div>
                Create new Account:
                <form action="scripts/addUser.php" method="post">
                    <input type="text" placeholder="Phone Number" name="phonenumber">
                    <input type="text" placeholder="Name" name="name">
                    <input type="date"  placeholder="Birthdate" name="birthdate">
                    <input type="password" placeholder="Password" name="password">
                    <input type="password" placeholder="Password" name="confirmation">
                    <input type="checkbox" placeholder="isAdmin?" name="admin">
                    <input type="submit">
                </form>
            </div>
        </div>
        <hr>






        <div>
            <h1>Rooms</h1>
<?php 
             $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => '127.0.0.1:4567/rooms?token=' . $_SESSION["token"],
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
                ));
                $resp = curl_exec($curl);
                $house = new House($resp);
                $house->displayCompleteHouseAsList();
?> 
        </div>
        <hr>
</div>
<br></br>
<br></br>
<br></br> 
<div id="pied_de_page">
		</div>    
</body>
</html>
