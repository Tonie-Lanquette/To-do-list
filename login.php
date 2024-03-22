<?php

use src\Classes\DbConnexion;
use src\Repositories\UserRepository;

include("./src/autoload.php");
session_start();


if (
    isset($_POST[$user["email"]]) && isset($_POST[$user["password"]]) && !empty($_POST[$user["email"]]) && !empty($_POST[$user["password"]]))
     {
    $data = file_get_contents("php://input");
    $user = (json_decode($data, true));

    $dbConnexion = new DbConnexion();
    $userRepository = new UserRepository($dbConnexion);

    // if(isset($_POST[$user["email"]]) && isset($_POST[$user["password"]])&& !empty($_POST[$user["email"]]) && !empty($_POST[$user["password"]]) )
    // {
    if ($userRepository->loginAccount($user["email"], $user["password"])) {
        echo "success";
    } else {
        echo "no account matching";
    }
    // } else {
    //     echo "didn't work";
    // }
}  else {
        echo "no account matching";
    }
