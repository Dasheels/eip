<?php
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
addUser();

function createJson(){
    $encryptedPassword = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $array = array('phonenumber' => $_POST["phonenumber"], 'name' => $_POST["name"], 'birthdate' => $_POST["birthdate"], 'password' => $encryptedPassword, 'admin' => $_POST["admin"]);
    return json_encode($array);
}

function addUser(){
    if (isset($_POST["phonenumber"]) && isset($_POST["name"]) 
        && isset($_POST["birthdate"]) && strcmp($_POST["password"], $_POST["confirmation"]) == 0) {
        $json = createJson(); 
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/user',
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => array("Content-type: application/json"),
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $resp = curl_exec($curl);
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
    else if (strcmp($_POST["password"], $_POST["confirmation"]) != 0){
        echo "Password doesn't match.";    
    }
}
?>
