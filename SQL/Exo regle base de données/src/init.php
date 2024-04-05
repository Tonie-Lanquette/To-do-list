<?php
session_start();
require __DIR__ . '/autoload.php';

require __DIR__ . "/../config.php";

require __DIR__ . '/router.php';

if (DB_INITIALIZED == FALSE) {
  $db = new src\Models\Database;

  $db->initializeDB();
}
