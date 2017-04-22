<?php
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
addMacAdress();

function createJson(){
    $array = array('phoneSecurity' => $_POST["phoneSecurity"], 'phoneSecurity-confirmed' => $_POST["phoneSecurity-confirmed"]);
    return json_encode($array);
}

function addMacAdress(){
    if (strcmp($_POST["phoneSecurity"], $_POST["phoneSecurity-confirmed"]) == 0) {
        $json = createJson(); 
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/addMacAdress',
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => array("Content-type: application/json"),
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $resp = curl_exec($curl);
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
    else if (strcmp($_POST["phoneSecurity"], $_POST["phoneSecurity-confirmed"]) != 0){
        echo "Mac adress doesn't match.";    
    }
}
?>