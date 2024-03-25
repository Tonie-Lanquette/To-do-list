<?php

namespace src\Repositories;

use src\Classes\DbConnexion;
use src\Classes\Task;

class TaskRepository
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function addTask(Task $task)
    {

        $name = $task->getName();
        $idCategory = $task->getIdCategory();
        $description = $task->getDescription();
        $date = $task->getDate();
        $idUser = $task->getIdUser();
        $idPriority =  $task->getIdPriority();

        try {
            $stmt = $this->pdo->prepare("INSERT INTO tdl_task VALUES(NULL, ?, ?, ?, ?,?,?)");

            $stmt->execute([$name, $idCategory, $description, $date, $idUser, $idPriority]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            var_dump($e);
        }
    }
};
