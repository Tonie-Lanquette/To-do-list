<?php
if (isset($_POST)) {
    // php a du mal à lire le json donc on le décode
    $data = file_get_contents("php://input");
    // on retourne les date sous forme de tableau
    $product = json_decode($data, true);

    $file = "./product.csv";
    $fp = fopen($file, "a");
    $productName = htmlspecialchars(strip_tags(trim($product["name"])));
    $productPrice = htmlspecialchars(strip_tags(trim($product["price"])));
    $productQuantity = htmlspecialchars(strip_tags(trim($product["quantity"])));

    $row_count = 0;
    if (($handle = fopen($file, "r")) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $row_count++;
        }
        fclose($handle);
    }
    $id = $row_count + 1;
    $row = [$id, $productName, $productPrice, $productQuantity];
    fputcsv($fp, $row);

    fclose($file);
    echo $product;
}
