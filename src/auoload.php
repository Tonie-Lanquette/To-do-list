<?php

use Classes\Task\Task as TaskTask;


spl_autoload_register("loadClasses");

function loadClasses($classe)
{
    $classe = str_replace('src', '', $classe);
    $classe = str_replace('\\', '/', $classe);

    $fichier = $classe . 'php';

    try {
        if (file_exists(__DIR__ . $fichier)) {
            require_once __DIR__ . $fichier;
        }
    } catch (Error $error) {
        echo "Une erreur est survenue : " . $error->getMessage();
    }
}

require __DIR__ . "/../config.php";


if (DB_INITIALIZED == FALSE) {
    $db = new TaskTask;

    $db->initializeDB();
}
