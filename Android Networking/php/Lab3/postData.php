<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Origin: *");

$data = json_decode(file_get_contents("php://input"));

$toan = $data->toan;
$van = $data->van;
$anh = $data->anh;
$tbd = ($toan + $van + $anh) / 3;
$ketqua;

if ($tbd > 5) {

    $ketqua = "Đạt";
} else {

    $ketqua = "Không Đạt";
}
$e = array(
    "tbd" => $tbd,
    "ketqua" => $ketqua,
);

echo json_encode($e);
