<?php 

class History {

    private $response;

    function __construct($user){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/history?username="' . $user . '"',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $this->response = curl_exec($curl);
    }

    private function getObject($objectId){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/object?id="' . $objectId . '"',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $response = curl_exec($curl);
        $json = json_decode($response, true);
        return $json["type"] . " in room " . $json["room"];
    }

    public function displayHistory(){
        $array =  json_decode($this->response, true);
        echo "<table>";
        echo"<tr>
                <th>Action</th>
                <th>Object</th>
                <th>Hour</th>
                <th>Day</th>
            </tr>";
        foreach ($array as $json) {
            echo "<tr>";
            echo "<td>" . $json["name"] . "</td>";
            echo "<td>" . $this->getObject($json["ObjectID"]) . "</td>";
            echo "<td>" . $json["hour"] . "</td>";
            echo "<td>" . $json["day"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
