<?php


if (!empty(file_get_contents('php://input'))) {

    $data = json_decode(file_get_contents('php://input'));

    $hash = password_hash($data->mdp, PASSWORD_DEFAULT);

    header('Content-Type: application/json');
    echo json_encode($hash);
}
