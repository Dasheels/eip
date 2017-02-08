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
        foreach ($this->house as $room) {
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
        }
    }
}
