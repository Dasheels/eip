<?php include "include/nav.php";?>
<?php include "classes/history.php";?>
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

<!--       <div>
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
        <hr> --!>

        <div>

    <div id="account-information">
    <form>
        Change your password : 
        <input name="password" type="password">
        <input name="password-confirmed" type="password">
        <input type ="submit" value = "OK">
    </form>
    <br>
    </div>

    <div id="account-history">
    <h2>Your actions History</h2>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", E_ALL);
        $history = new History($_SESSION["user"]); 
        $history->displayHistory();
    ?>
    </div>

    <div id="account-habits">
        <h1>WORK IN PROGRESS</h1>
    </div>
</div>
<br></br>
<br></br>
<br></br>
<div id="pied_de_page"> 
</div>
</body> 
</html>
