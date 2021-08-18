<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$name = $_GET['name'];
$scoce = $_GET['scoce'];

echo "Name: " . $name . " "  . "Scoce: " . $scoce;
