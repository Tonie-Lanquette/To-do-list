<?php
session_start();
if (!isset($_SESSION["mystery"])) {
    $_SESSION["mystery"] = rand(1, 100);
}

if (isset($_POST["inputNumber"]) && isset($_SESSION["mystery"]) && is_numeric($_POST["inputNumber"])) {

    $safeInput = htmlspecialchars(trim(strip_tags(($_POST["inputNumber"]))));

    if ($_POST["inputNumber"] < $_SESSION["mystery"]) {
        $feedback = "Le nombre mystère est plus grand";
    } elseif ($_POST["inputNumber"] > $_SESSION["mystery"]) {
        $feedback = "Le nombre mystère est plus petit";
    } else {
        $feedback = "C'est gagné";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juste Prix</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="back" src="./candidatsPrix.jpg">
    <div class="jeu">
        <form action="./indexJP.php" name="submit" method="post">
            <input type="number" name="inputNumber" />
            <input type="submit" value="Allonz-y quoi" <?php
                                                        if (isset($feedback) && $feedback == "C'est gagné") {
                                                        ?> disabled <?php
                                                                }
                                                                    ?> />
        </form>
        <?php
        if (isset($feedback)) {
            echo "<p>" . $feedback . "</p>";
        }
        ?>

        <a href="./resetJS.php">Restart</a>
    </div>

</body>



</html>