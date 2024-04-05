<?php
session_start();
if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}
$_SESSION["name"] = "Tonie";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juste prix</title>
</head>

<body>

    <?php
    $_SESSION["name"];
    echo "<p> Joueur : " . $_SESSION["name"] . "</p>";
    $result = 0;
    $result++;
    echo "<p> Ma variable qui n'est pas en session " . $result . "</p>";

    $_SESSION["score"]++;
    echo "<p> Ma variable de session : " . $_SESSION["score"] . "</p>";
    ?>
    <a href="./next.php">Liens vers Next <br></a>
    <a href="./reset.php">Liens vers reset </a>
</body>

</html>