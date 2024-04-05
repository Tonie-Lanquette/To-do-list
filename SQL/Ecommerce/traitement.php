<?php
// Comme dans l'index, on amène l'include, pour retrouver nos classes avec les Use.
include("autoload.php");

session_start();

use Models\Category\Category;
use Repositories\CategoryManager\CategoryManager;
use Models\DbConnexion\DbConnexion;
use Models\Product\Product;
use Repositories\ProductManager\ProductManager;

// Dans ce fichier, je peux gérer tous les traitements, 
// Et les différencier en mettant un name différent dans la balise form
// de la vue ( ex: index)
// Quand le formulaire sera posté, son nom sera visible comme ici 
// pour notre formulaire d'ajout
if (isset($_POST["addProduct"])) {
    $obj = new Product($_POST);
    $dbConnexion = new DbConnexion;
    $manager = new ProductManager($dbConnexion);
    if ($manager->insertProduct($obj)) {
        header("Location:index.php");
        echo "success";
    } else {
        var_dump('tu as fauter');
    }
}

if (isset($_POST["addCategory"])) {
    $obj = new Category($_POST);
    $dbConnexion = new DbConnexion;
    $manager = new CategoryManager($dbConnexion);
    if ($manager->insertCategory($obj)) {
        header("Location:index.php");
        echo "success";
    } else {
        var_dump('tu as fauter');
    }
}

if (isset($_POST["editProduct"])) {
    $obj = new Product($_POST);
    $obj->setId_products($_SESSION["idToUpdate"]);
    $dbConnexion = new DbConnexion;
    $manager = new ProductManager($dbConnexion);
    if ($manager->editProduct($obj)) {
        header("Location:index.php");
        echo "success";
    } else {
        var_dump('tu as fauter');
    }
}
