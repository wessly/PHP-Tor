<?php

$proxy = "127.0.0.1"; // TOR proxy server ip address
$port = "9050"; // TOR proxy port
$url = ""; // Link to website -> https://example.com/vote/now.php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXYTYPE, 7);
curl_setopt($ch, CURLOPT_PROXY, $proxy.':'.$port);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded')); // You can choose another method here
curl_setopt($ch, CURLOPT_POST, 1); // It's POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("foo" => "bar"))); // What you sould post
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
var_dump($server_output);

curl_close ($ch);
