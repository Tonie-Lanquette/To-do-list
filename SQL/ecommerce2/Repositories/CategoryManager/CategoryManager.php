<?php
namespace Repositories\CategoryManager;

use Models\Category\Category;
use Models\DbConnexion\DbConnexion;

class CategoryManager
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allCategories()
    {
        $categories = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM category");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $categories[] = new Category($row);
            }
        } catch (\PDOException $e) {
            return $categories;
        }
        return $categories;
    }

    public function insertCategory(Category $objet)
    {
        $name = $objet->getNameCategory();
        try {
            $stmt = $this->pdo->prepare("INSERT INTO category (name) VALUES (?)");
            $stmt->execute([$name]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
