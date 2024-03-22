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
    $userManager = new UserRepository($dbConnexion);

    if (isset($userData["email_user"]) && isset($userData["password_user"]) && isset($userData["firstName_user"]) && isset($userData["lastName_user"]) && !empty($userData["email_user"]) && !empty($userData["password_user"]) && !empty($userData["firstName_user"]) && !empty($userData["lastName_user"])) {

        $userFirstName = htmlspecialchars($userData["firstName_user"]);
        $userLastName = htmlspecialchars($userData["lastName_user"]);
        $userEmail = htmlspecialchars($userData["email_user"]);
        $userPassword = hash("whirlpool", $userData["password_user"]);
        var_dump($userPassword);


        $userInfos = array(
            "lastName_user" => $userLastName,
            "firstName_user" => $userFirstName,
            "email_user" => $userEmail,
            "password_user" => $userPassword,
        );

        $user = new User($userInfos);


        if ($userManager->checkUserExist($user)) {
            echo "Email already taken";
            return;
        }



        if ($userManager->register(($user))) {
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
