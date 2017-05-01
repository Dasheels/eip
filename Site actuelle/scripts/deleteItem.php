<?php
error_reporting(E_ALL);
ini_set("display_errors", E_ALL);
deleteItem();

function createJson() {
	$type = $_POST["type"];
	$room = $_POST["id"];
	$array = array('type' => $type, 'id' => $id);
	return json_encode($array);
}

function deleteItem() {
    $json = createJson(); 
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'localhost:4567/item',
        CURLOPT_HTTPHEADER => array("Content-type: application/json"),
	    CURLOPT_POSTFIELDS => $json,
	    CURLOPT_CUSTOMREQUEST => 'DELETE',
	    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
	));
	curl_exec($curl);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}