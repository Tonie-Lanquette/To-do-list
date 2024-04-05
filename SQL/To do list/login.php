<?php

use src\Classes\DbConnexion;
use src\Repositories\UserRepository;

include("./src/autoload.php");
session_start();




if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $userData = (json_decode($data, true));



    $dbConnexion = new DbConnexion();
    $userRepository = new UserRepository($dbConnexion);
    $user = $userRepository->getUserByEmail($userData["email"]);
    var_dump($user);

    if (isset($userData["email"]) && isset($userData["password"]) && !empty($userData["email"]) && !empty($userData["password"])) {

        if ($userRepository->loginAccount($userData["email"], $userData["password"])) {
            var_dump($user->getIdUser());
            $_SESSION["id"] = $user->getIdUser();
            var_dump($_SESSION['id']);
            echo "success";
        } else {
            echo "No account found";
        }
    } else {
        echo "Some input are empty";
    }
}
