<?php

namespace src\Repositories;



class TaskRepository
{

    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }

    public function creatTask(Task $task)
    {

        $sql = "INSERT INTO  tdl_task (id_task, name, description, date, id_user, id_priority	) VALUES (:id_task, :name, :description, :date, :id_user, :id_priority)";


        $statement = $this->DB->prepare($sql);

        $retour = $statement->execute([
            ':id_task' => $task->getIdTask(),
            ':name' => $task->getNameTask(),
            ':description' => $task->getDescriptionTask(),
            ':date' => $task->getDateTask(),
            ':id_user' => $task->getIdUser(),
            ':id_priority' => $task->getIdPriority(),

        ]);

        return $retour;
    }
};
