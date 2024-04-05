<?php
include("autoload.php");
session_start();

use Models\DbConnexion\DbConnexion;
use Repositories\UserManager\UserManager 
use User\User;


if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $user = (json_decode($data, true));


    $dbConnexion = new DbConnexion();
    $userManager = new UserManager($dbConnexion);

    if ($userManager->login($user["email"], $user["password"])) {
        echo "success";
    }else{
        echo"didn't work";
    }
}
