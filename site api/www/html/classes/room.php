<?php
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);

class Room
{
    private $id;
    private $room;
    private $roomContent = array();

    function __construct($id) {
        $this->id = $id;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/room?id=' . $id,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $resp = curl_exec($curl);
        $this->room = json_decode($resp, true);
    }

    public function getContent(){
        return $this->room;
    }

    private function displayAlarm($object) {
        echo "<tr>";
        echo "<td>Alarme</td>";
        if ($object["status"] == "off" || $object["status"] == '0') {
            echo "<td>Not Set</td>";
        } else {
            echo "<td>Set at : " . $object["timeset"] . "</td>";
        }
        echo "<td><form action='scripts/action.php' method ='post'>
                <input type='hidden' name='type' value = '" . $object["type"] . "'>
                <input type='hidden' name='id' value = '" . $object["id"] . "'>
                <input type='time' name = 'time'>      <!-- Doesn't work on safari, IE, and firefox -->
                <input type='submit' value='set Alarm'>
                </form>";
        echo "</tr>";
    }
    
    private function displayLight($object) {
        echo "<tr>";
        echo "<td>Lumière</td>";
        if ($object["status"] == "off" || $object["status"] == '0') {
            $button = "on";
            echo "<td>Off</td>";
        } else {
            $button = "off";
            echo "<td>On</td>";
        }
        echo "<td><form action='scripts/action.php' method ='post'>
                <input type='hidden' name='type' value = '" . $object["type"] . "'>
                <input type='hidden' name='id' value = '" . $object["id"] . "'>
                <input type='submit' name='".$button."' value='Turn " . $button . "'>
            </form></td></tr>";
    }
    
    private function displayComputer($object) {
        echo "<tr>";
        echo "<td>Ordinateur </td>";
        if ($object["status"] == "off" || $object["status"] == '0') {
            $button = "on";
            echo "<td>Off</td>";
        } else {
            $button = "off";
            echo "<td>On</td>";
        }
       echo "<td><form action='scripts/action.php' method ='post'>
            <input type='hidden' name='type' value = '" . $object["type"] . "'>
            <input type='hidden' name='id' value = '" . $object["id"] . "'>
            <input type='submit' name='".$button."' value='Turn " . $button . "'>
        </form></td></tr>";
    }
    
    private function displayShutters($object) {
        echo "<tr>";
        echo "<td>Volets</td>";
        if ($object["status"] == "off" || $object["status"] == '0') {
            $button = "open";
            echo "<td>Closed</td>";
        } else {
            $button = "close";
            echo "<td>Open</td>";
        }
       echo "<td><form action='scripts/action.php' method ='post'>
            <input type='hidden' name='type' value = '" . $object["type"] . "'>
            <input type='hidden' name='id' value = '" . $object["id"] . "'>
            <input type='submit' name='".$button."' value='Turn " . $button . "'>
        </form></td></tr>";
    }

    private function displayObject($object) {
        switch ($object["type"]) {
            case "alarms" :
                $this->displayAlarm($object);
                break;
            case "light":
                $this->displayLight($object);
                break;
            case "computer":
                $this->displayComputer($object);
                break;
            case "shutters":
                $this->displayShutters($object);
                break;
            default :
                echo "<tr><td>" . $object["type"] . "</td><td>" . $object["status"] . "</td></tr>";


        }
    }

    public function displayRoomContent() {
        echo "<table>";
        foreach ($this->room as $object){
            $status;
            if ($object["status"] == 0) {
                $status = "off";
            } else {
                $status = "on";
            }
            $this->displayObject($object);
        }   
        echo "</table>";
    }

}
 ?>

