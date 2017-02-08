<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'localhost:4567/user',
    CURLOPT_POSTFIELDS => 'phonenumber=' . $_GET["phonenumber"],
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
curl_exec($curl);

header('Location: ' . $_SERVER['HTTP_REFERER']);
