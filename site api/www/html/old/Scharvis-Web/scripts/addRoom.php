<?php 
function createJson() { 
    if (isset($_POST["type"]) && isset($_POST["name"])) {
        $type = $_POST["type"];
        $name = $_POST["name"];
        $array = array('name' => $name, 'type' => $type);
        return json_encode($array);
    } else {
        return null;
    }
}

function addRoom() {
    $json = createJson();
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'localhost:4567/room',
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array("Content-type: application/json"),
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    $resp = curl_exec($curl);	
    header('location: ' . $_SERVER['HTTP_REFERER']);
}
addRoom();
