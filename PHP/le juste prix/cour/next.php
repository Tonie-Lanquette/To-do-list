<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Next</title>
</head>

<body>

    <?php
    if (isset($_SESSION["name"])) {
        echo "<p> Joueur : " . $_SESSION["name"] . "</p>";
    }

    $_SESSION["score"]++;
    echo "<p> Ma variable de session : " . $_SESSION["score"] . "</p>";
    ?>
    <a href="./index.php">Lien vers Index </a>

</body>

</html>