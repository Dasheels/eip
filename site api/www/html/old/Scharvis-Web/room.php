
<?php include "include/nav.php";?>
<?php include "classes/room.php";?>
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

<?php
  $room =  new Room($_GET["id"]);
  $room->displayRoomContent();
?>
<?php
  if ($_SESSION["isAdmin"]){
    ?>
    <form method="post" action="scripts/addItem.php">
    	<input type="radio" name="type" value="alarm">alarm
	<input type="radio" name="type" value="computer">computer
    	<input type="radio" name="type" value="shutters">shutters
    	<input type="radio" name="type" value="lights">lights
        <input type="hidden" name="room" value=<?php echo $_GET["id"];?>>
    	<input type="submit" value="create">
    </form>
<?php
  }
?>


<br></br>
<br></br>

<br></br>
<br></br>

<br></br>
<br></br>

<br></br>
<br></br>

</div>
<br></br>

<div id="pied_de_page">
</div>


</body>
</html>
