<?php

namespace src\Repositories;


use src\Classes\DbConnexion;
use src\Classes\Priority;

class PriorityRepository
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function getAllPriorities()
    {
        $priorities = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM tdl_priority ");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $priorities[] = new Priority($row);
            }
        } catch (\PDOException $e) {
            var_dump($e);
        }


        return $priorities;
    }
}
