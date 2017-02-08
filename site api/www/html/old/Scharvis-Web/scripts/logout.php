<?php

session_start();
$token = $_SESSION["token"];
if(session_destroy())
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => '127.0.0.1:4567/logout',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => 'token='.$token,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
  ));
  $resp = curl_exec($curl);
  header('location: /Scharvis-Web/index.php');
}

