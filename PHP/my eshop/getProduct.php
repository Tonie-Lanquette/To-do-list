<?php

$file = "./product.csv";
$fp = fopen($file, "a");
$data = file_get_contents("php://input");

$rows = [];

if (($handle = fopen($file, "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        array_push($rows, $data);
    }

    echo json_encode($rows);
}
