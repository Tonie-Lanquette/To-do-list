<?php
if (isset($_POST)) {
    // php a du mal à lire le json donc on le décode
    $data = file_get_contents("php://input");
    // on retourne les date sous forme de tableau
    $user = json_decode($data, true);

    $file = "./user.csv";
    $fp = fopen($file, "a");
    $name = htmlspecialchars(strip_tags(trim($user["name"])));
    $password = htmlspecialchars(strip_tags(trim($user["password"])));
    $email = htmlspecialchars(strip_tags(trim($user["email"])));

    $row_count = 0;
    if (($handle = fopen($file, "r")) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $row_count++;
        }
        fclose($handle);
    }
    $id = $row_count + 1;
    $row = [$id, $email, $password, $name];
    fputcsv($fp, $row);

    fclose($file);
    echo $user;
}
