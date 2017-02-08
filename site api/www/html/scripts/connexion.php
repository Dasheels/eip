<?php
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
if (isset($_POST["signin"])) {
    login();
}

function createJson() {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $array = array('username' => $username, 'password' => $password);
        return json_encode($array);
    } else {
        return null;
    }
}

function login() {
    $curl = curl_init();
    $json = createJson();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'localhost:4567/login',
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array("Content-type: application/json"),
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    $resp = curl_exec($curl);
    if (strcmp($resp, "fail") != 0) {
        session_start();
        $json = json_decode($resp, true);
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['isAdmin'] = $json['admin'];
        $_SESSION['name'] = $json['name'];
        $_SESSION['token'] = $json['token'];
        echo $json;
        header('location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Couldn't login. Check your credentials.";
    }
}
