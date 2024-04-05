<?php
use Models\DbConnexion\DbConnexion;
use Models\Product\Product;
use Repositories\ProductManager\ProductManager;
// Comme dans l'index, on amène l'include, pour retrouver nos classes avec les Use.
include('autoloader.php');


// Dans ce fichier, je peux gérer tous les traitements, 
// Et les différencier en mettant un name différent dans la balise form
// de la vue ( ex: index)
// Quand le formulaire sera posté, son nom sera visible comme ici 
// pour notre formulaire d'ajout
if (isset($_POST["newProduct"])) {

    
    $obj = new Product($_POST);
    $cx = new DbConnexion();
    $manager = new ProductManager($cx);

    if ($manager->insertProduct($obj)) {
        header("Location: index.php");
        echo "sucess";
    } else {
        echo "pb";
    }
}

