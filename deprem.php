<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = file_get_contents("http://ip-api.com/json/{$ip}?fields=66842623&lang=tr/");

echo $details;
?>