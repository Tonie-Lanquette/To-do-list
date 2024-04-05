<?php

use Models\DbConnexion\DbConnexion;
use Repositories\CategoryManager\CategoryManager;
use Repositories\ProductManager\ProductManager;

include('autoloader.php');


// Le use permet d'utiliser une classe, en spécifiant son namespace\nom de la classe.



// Ici j'instancie un objet $dbConnexion qui est enfant de la classe DbConnexion.
// Pourquoi ? Car une classe est un moule, qui ne sers à rien d'autre que construire ( construct) 
// Des objets.
// Autrement dit, il faut d'abord instancier une classe pour pouvoir utiliser son objet et donc se connecter.
// Je crée donc ici un objet dbConnexion, qui permettra à Php de se connecter à la bdd MySQL
// Ma connexion à la dbb, s'occupe seulement de passer les identifiants et le nom de la bdd 
// Cette classe ne serts pas à créer des requêtes SQL ( ex: SELECT * FROM user)
$dbConnexion = new DbConnexion();


// De la même manière pour utiliser le product manager qui va utiliser la connexion pour effectuer des requêtes, 
// il faut passer à ce manager l'instance de connexion.
// Mon product manager ne s'occupe pas de la connexion, seulement des requêtes.
// La connexion lui est passée en paramètres.
// C'est pour cela que je passe à mon product manager mon instance de connexion.
$productManager = new ProductManager($dbConnexion);


$products = $productManager->allProductsAndCategories();
// Grâce à l'instance de mon productManager, j'ai accès aux fonctions de cette classe.
// Comme ici la requêtes avoir tous les produits et catégories.
// Cette classe sert a gérer toutes les requêtes SQL de ma classe Product.
// Dans cette fonction un tableau de produits est générés , et je peux donc me servir plus bas de 
// cette variable dans un forEeach pour afficher les produits.


$categoryManager =   new CategoryManager($dbConnexion);
$categories = $categoryManager->allCategories();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les classes en Poo</title>
    </head>

    <body>
        <main class="main w-full bg-black min-h-screen pl-12 py-8 w-1/2 px-auto flex flex-col justify-center">

        <?php
         // Ici on sépare la couche vue du reste de l'application, 
         // on récupère les données plus haut,  et on appelle une vue 
         // avec un include pour les afficher .
         // On pourrait être tentés de mettre aussi la logique métier plus haut dans ce fichier égalemment dans la vue
         // mais c'est anti pattern.
         include("./Views/AllProducts.php");
         include("./Views/AddProduct.php") ;
         include("./Views/Register.php");

        ?>



        </main>
   <?php include("./Views/footer.php") ?>

</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="script.js"></script>

</html>