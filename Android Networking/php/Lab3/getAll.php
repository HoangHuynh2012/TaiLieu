<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Origin: *");


$e = array(
    array(
        "id" => "PS11694",
        "name" => "Huỳnh"
    ),
    array(
        "id" => "123123",
        "name" => "Tên"
    ),
    array(
        "id" => "😏",
        "name" => "😏"
    ),
    array(
        "id" => "😼 ",
        "name" => "😼 "
    ),
);

echo json_encode($e);
