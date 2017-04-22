<?php 
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
meteoLocation();

function createJson() {
    if (isset($_POST["cityname"])) {
        $cityname = $_POST["cityname"];
        $array = array('cityname' => $cityname);
        return json_encode($array);
    } else {
        echo "couldn't create JSON";
        return null;
    }
}

function meteoLocation() {
    $json = createJson(); 
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => '192.168.1.3:4567/meteoLocation',
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array("Content-type: application/json"),
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'));
    $resp = curl_exec($curl);
    header('location: ' . $_SERVER['HTTP_REFERER']);
}