<?php

use src\Classes\DbConnexion;
use src\Classes\Task;
use src\Repositories\TaskRepository;

session_start();

include("./src/autoload.php");


if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $taskInfos = (json_decode($data, true));

    $dbConnexion = new DbConnexion();
    $taskRepository = new TaskRepository($dbConnexion);

    $task = new Task($taskInfos);

    $name = $taskInfos["name"];
    $category = $taskInfos["id_category"];
    $description = $taskInfos["description"];
    $date = $taskInfos["date"];
    $idUser = $_SESSION['id'];
    $priority = $taskInfos["id_priority"];

    $userInfos = array(
        "name" => $name,
        "id_category" => $category,
        "description" => $description,
        "date" => $date,
        "id_user" => $idUser,
        "id_priority" => $priority,
    );

    if ($taskRepository->addTask(($task))) {
        echo "inserted";
    } else {
        echo "Error";
    }
}
