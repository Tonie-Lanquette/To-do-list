<?php

namespace src\Repositories;

use src\Classes\Category;
use src\Classes\DbConnexion;

class CategoryRepository
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function getAllCategories()
    {
        $categories = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM tdl_category ");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $categories[] = new Category($row);
            }
        } catch (\PDOException $e) {
            var_dump($e);
        }


        return $categories;
    }
}
