<?php
include "classes/room.php";
class House {

private $house;

    function __construct($houseContent) {
        $this->house = json_decode($houseContent, true);
    } 

    public function displayHouse(){
        echo "<table>";
        foreach ($this->house as $room){
            echo "<tr><td>" . $room["name"] . "</td><td>" . $room["type"]."</td>";
            echo "<td><a href='room.php?id=".$room["id"]."'>Go</a></td></tr>";
        }   
        echo "</table>";
    }


    public function displayCompleteHouseAsList(){
        /*foreach ($this->house as $room) {
            echo "<ul>";

            echo "<li>";
            echo $room["name"];
            echo " <a href='scripts/deleteRoom.php?id=" . $room["id"] . "'>X</a>";
            $roomContent =  new Room($room["id"]);
            foreach ($roomContent->getContent() as $objects) {
                echo "<ul>";
                echo $objects["type"];
                echo " <a href='scripts/deleteItem.php?id=" . $objects["id"] . "'>X</a>";
                echo "</ul>";
            }
            echo "</li>";
            echo "</ul>";
            */
            $sub_nbr = 0;
            foreach ($this->house as $room) {
                $sub_nbr = $sub_nbr + 1;
                echo "<div class='panel panel-default panel-faq'>
                    <div class='panel-heading'>
                        <a data-toggle='collapse' data-parent='#accordion' href='#faq-sub-" . $sub_nbr ."'>
                            <h4 class='panel-title'>
                                " . $room["name"] . "
                                <span class='pull-right'>
                                    <i class='glyphicon glyphicon-plus'></i>
                                </span>
                            </h4>
                        </a>
                    </div>
                    <div id='faq-sub-" . $sub_nbr ."' class='panel-collapse collapse'>
                        <div class='panel-body'>";
                            $roomContent =  new Room($room["id"]); 
                            foreach ($roomContent->getContent() as $objects) {
                                echo "<ul>";
                                echo $objects["type"];
                                if ($_SESSION["isAdmin"])
                                    echo " <a class='fa-ban' href='scripts/deleteItem.php?id=" . $objects["id"] . "'></a>";
                                echo "</ul>";
                            }
                            echo "<a class='btn btn-primary btn-sm' href='chambre.php?id=".$room["id"]."'>Accéder à cette salle</a>";
                            if ($_SESSION["isAdmin"]) {
                                echo "<a class='btn btn-primary btn-sm' href='scripts/deleteRoom.php?id=" . $room["id"] . "'>Supprimer cette salle</a>";
                            }
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
        }
    }
}
