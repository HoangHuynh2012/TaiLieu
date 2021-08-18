<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$canh = $_GET['canh'];


$thetich = ($canh * $canh * $canh);

echo "Thể tích của hình lập phương có cạnh " . $canh . " là : " . $thetich;
