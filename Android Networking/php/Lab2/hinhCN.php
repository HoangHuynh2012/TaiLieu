<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$chieudai = $_GET['chieudai'];
$chieurong = $_GET['chieurong'];


$chuvi = ($chieudai * $chieurong) / 2;
$dientich = ($chieudai * $chieurong);
echo "Chu Vi và diện tích của hình chữ nhật có chiều dài  " . $chieudai .
    " chiều rộng " . $chieurong . " là: Chu Vi: " . $chuvi . " Diện tích là : " . $dientich;
