<?php
error_reporting(E_ALL);
echo "1";
ini_set("display_errors", E_ALL);
echo "2";
addUser();
echo "3";

function createJson(){
    $array = array('phonenumber' => $_POST["phonenumber"], 'name' => $_POST["name"], 'birthdate' => $_POST["birthdate"], 'password' => $_POST["password"], 'admin' => $_POST["admin"]);
    return json_encode($array);
}
function addUser(){
    if (isset($_POST["phonenumber"]) && isset($_POST["name"]) 
        && isset($_POST["birthdate"]) && strcmp($_POST["password"], $_POST["confirmation"]) == 0) {
        $json = createJson();
        echo "json created";   
        $curl = curl_init();
echo "9";
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/user',
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => array("Content-type: application/json"),
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
echo "10";
        $resp = curl_exec($curl);
echo "11";
        header('location: ' . $_SERVER['HTTP_REFERER']);
        echo "curl executed";   
    }
    else if (strcmp($_POST["password"], $_POST["confirmation"]) != 0){
        echo "Password doesn't match.";    
    }
else
    echo "12";
}
?>
