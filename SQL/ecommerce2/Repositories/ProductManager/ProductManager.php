<?php

namespace Repositories\ProductManager;

use Models\DbConnexion\DbConnexion;
use Models\Product\Product;

class ProductManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allProductsAndCategories()
    {
        $products = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM product INNER JOIN category ON product.id_category = category.id");

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $products[] = new Product($row);
            }
        } catch (\PDOException $e) {
            return $products;
        }

        return $products;
    }

    public function insertProduct(Product $objet)
    {
        $name = $objet->getName();
        $id_category = $objet->getId_category();
        $price = $objet->getPrice();
        $description = $objet->getDescription();

        try {
            $stmt = $this->pdo->prepare("INSERT INTO product VALUES(NULL, ?, ?, ?, ?)");
            $stmt->execute([$name, $id_category, $price, $description]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            var_dump($e);
        }
    }
}
