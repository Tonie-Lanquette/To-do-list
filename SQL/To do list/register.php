<?php
session_start();

use src\Classes\DbConnexion;
use src\Classes\User;
use src\Repositories\UserRepository;

include("./src/autoload.php");


if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $userData = (json_decode($data, true));

    $dbConnexion = new DbConnexion();
    $userRepository = new UserRepository($dbConnexion);

    if (isset($userData["email"]) && isset($userData["password"]) && isset($userData["firstName"]) && isset($userData["lastName"]) && !empty($userData["email"]) && !empty($userData["password"]) && !empty($userData["firstName"]) && !empty($userData["lastName"])) {

        $userFirstName = htmlspecialchars($userData["firstName"]);
        $userLastName = htmlspecialchars($userData["lastName"]);
        $userEmail = htmlspecialchars($userData["email"]);
        $userPassword = hash("whirlpool", $userData["password"]);


        $userInfos = array(
            "lastName" => $userLastName,
            "firstName" => $userFirstName,
            "email" => $userEmail,
            "password" => $userPassword,
        );

        $user = new User($userInfos);


        if ($userRepository->checkUserExist($user)) {
            echo "Email already taken";
            return;
        }



        if ($userRepository->register(($user))) {
            $_SESSION["id"] = $user->getIdUser();
            echo "inserted";
        } else {
            echo "Error";
        }
    } else {
        // ça fonctionne

        echo "Some input are empty";
    }
}
