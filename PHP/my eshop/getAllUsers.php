<?php
$data = file_get_contents("php://input");

$file = "./user.csv";
$fp = fopen($file, "a");

$rows  = [];

if (($handle = fopen($file, "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        array_push($rows, $data);
    }
    fclose($handle);
}

fclose($fp);

echo  json_encode($rows);
