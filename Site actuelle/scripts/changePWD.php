<?php
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
changePWD();

function createJson(){
    $encryptedPassword = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $array = array('password' => $encryptedPassword);
    return json_encode($array);
}

function changePWD(){
    if (strcmp($_POST["password"], $_POST["password-confirmed"]) == 0) {
        $json = createJson(); 
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/changePWD',
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => array("Content-type: application/json"),
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $resp = curl_exec($curl);
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
    else if (strcmp($_POST["password"], $_POST["password-confirmed"]) != 0){
        echo "Password doesn't match.";    
    }
}
?>