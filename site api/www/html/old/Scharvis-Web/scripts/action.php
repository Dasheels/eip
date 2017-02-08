<?php

error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
session_start();


function handleAlarms(){
    if (isset($_POST["time"])){
        $var = date_create($_POST["time"]);
        $time = date_format($var, "H:i");
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'time' => $time, 'action' => "set", 'user' => $_SESSION["user"]);
        echo "turning alarm at " . $time; 
    }
    return json_encode($array);     
}

function handleLight(){
    if (isset($_POST["on"])){
        echo "turning light on";
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'action' => "on", 'user' => $_SESSION["user"]);
    } else if (isset($_POST["off"])){
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'action' => "off", 'user' => $_SESSION["user"]);
        echo "turning light off";
    }
    return json_encode($array);     
}

function handleShutters(){
    if (isset($_POST["close"])){
        echo "Closing Shutters";
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'action' => "off", 'user' => $_SESSION["user"]);
    } else if (isset($_POST["open"])){
        echo "Opening Shutters";
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'action' => "on", 'user' => $_SESSION["user"]);
    }
    return json_encode($array);     
}

function handleComputer(){
    if (isset($_POST["on"])){
        echo "turning computer on";
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'action' => "on", 'user' => $_SESSION["user"]);
    } else if (isset($_POST["off"])){
        echo "turning computer off";
        $array = array('id' => $_POST["id"], 'type' => $_POST["type"], 'action' => "off", 'user' => $_SESSION["user"]);
    }
    return json_encode($array);     
}

function action(){
    $json;
    switch ($_POST["type"]) {
        case "alarms":
            $json = handleAlarms();
            break;
        case "light":
            $json = handleLight();
            break;
        case "shutters":
            $json = handleShutters();
            break;
        case "computer":
            $json = handleComputer();
            break;
        default:
            echo $_POST["type"];
    }
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => '127.0.0.1:4567/action',
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array("Content-type: application/json"),
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    curl_exec($curl);
    header('location: ' . $_SERVER['HTTP_REFERER']);
}

action();
