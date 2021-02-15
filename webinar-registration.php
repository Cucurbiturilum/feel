<?php

if (empty($_GET['email'])|| empty($_GET ['short_id']) || empty($_GET['start_time'])){
    echo "Oops.. Something went to wrong! Please contact support!";
    exit();
}

$email = $_GET['email'];
$webinarId = $_GET ['short_id'];
$name = $_GET ['name'];
$starTime = $_GET['start_time'];

$data = json_encode([
    'start_time' => $starTime,
    'name' => $name,
    'email' => $email,
]);

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, "https://api.joinnow.live/webinars/{$webinarId}/registration");
curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data),
]);
$response = curl_exec($curl_handle);
$http_code = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);
curl_close($curl_handle);

print_r($response);
if ($http_code==200){
    header("Location: https://www.currencyking.com/hybrid-1/", true, 301);
    exit();
} else {
    echo "Oops.. Something went to wrong! Please contact support!";
}



