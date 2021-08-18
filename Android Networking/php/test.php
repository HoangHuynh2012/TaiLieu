<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

$a = $_GET['a'];
$b =
    $_GET['b'];
$c =
    $_GET['c'];
// $a = 4;
// $b = -2;
// $c = -6;

$detail = $b * $c - 4 * $a * $c;

if ($detail < 0) {
    echo "PT vô nghiệm";
} elseif ($detail == 0) {
    $nghiemkep = -$b / (2 * $a);
    echo "PT có nghiệm kép là: " . $nghiemkep;
} else {
    $nghiemmot = (-$b + sqrt($detail)) / (2 * $a);
    $nghiemhai = (-$b - sqrt($detail)) / (2 * $a);
    echo "PT có 2 nghiệm phân biệt là: " . $nghiemmot . " " . $nghiemhai;
}
