<?php 
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
echo "test";
addItem();

function createJson() {
    if (isset($_POST["type"]) && isset($_POST["room"])) {
        $type = $_POST["type"];
        $room = $_POST["room"];
        $array = array('type' => $type, 'room' => $room);
        return json_encode($array);
    } else {
        echo "couldn't create JSON";
        return null;
    }
}

function addItem() {
    $json = createJson(); 
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'localhost:4567/item',
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array("Content-type: application/json"),
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    $resp = curl_exec($curl);
    header('location: ' . $_SERVER['HTTP_REFERER']);
}

