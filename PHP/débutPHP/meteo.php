<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
</head>

<body>
    <?php

    $mois = [
        "jour 1" => [
            "pluie en mm" => "0",
            "temperature max" => "32",
            "temperature min" => "12"
        ],
        "jour 2" => [
            "pluie en mm" => "0",
            "temperature max" => "26",
            "temperature min" => "6"
        ],
        "jour 3" => [
            "pluie en mm" => "10",
            "temperature max" => "17",
            "temperature min" => "2"
        ],
        "jour 4" => [
            "pluie en mm" => "25",
            "temperature max" => "15",
            "temperature min" => "2"
        ],
        "jour 5" => [
            "pluie en mm" => "55",
            "temperature max" => "14",
            "temperature min" => "1"
        ],
        "jour 6" => [
            "pluie en mm" => "45",
            "temperature max" => "4",
            "temperature min" => "-4"
        ],
        "jour 7" => [
            "pluie en mm" => "35",
            "temperature max" => "3",
            "temperature min" => "-6"
        ],
        "jour 8" => [
            "pluie en mm" => "7",
            "temperature max" => "0",
            "temperature min" => "-12"
        ],
        "jour 9" => [
            "pluie en mm" => "0",
            "temperature max" => "-2",
            "temperature min" => "-15"
        ],
        "jour 10" => [
            "pluie en mm" => "26",
            "temperature max" => "27",
            "temperature min" => "2"
        ],
        "jour 11" => [
            "pluie en mm" => "300",
            "temperature max" => "13",
            "temperature min" => "3"
        ],
        "jour 12" => [
            "pluie en mm" => "240",
            "temperature max" => "18",
            "temperature min" => "1"
        ],
        "jour 13" => [
            "pluie en mm" => "100",
            "temperature max" => "35",
            "temperature min" => "17"
        ],

        "jour 14" => [
            "pluie en mm" => "26",
            "temperature max" => "39",
            "temperature min" => "19"
        ],
        "jour 15" => [
            "pluie en mm" => "89",
            "temperature max" => "10",
            "temperature min" => "0"
        ],

    ];

    //TEST FONCTIONNEL MAIS VALEURS MIN ET MAX NON RECUPERALE ULTERIEUREMENT
    // foreach ($mois as $jours) {
    // $moyenne_jour = ($jours["temperature max"] + $jours["temperature min"]) / 2;
    // echo "La température moyenne est $moyenne_jour <br>";
    // } donne la moyenne de chaque jour

    // function rendreTemperatureMoyenne($mois)
    // {

    // // on creer de nouveaux tableaux avec toutes les valeurs min et max
    // $min = [];
    // $max = [];
    // // On récupère toutes les températures min et max :
    // foreach ($mois as $jour => $stats) {
    // array_push($min, $stats['temperature min']);
    // array_push($max, $stats['temperature max']);
    // //une autre manière d'écrire l'ajout dans un tableau
    // // $min[] = $stats["temperature min"]
    // }
    // // On met tout ça dans un seul tableau :
    // $totalTemp = array_merge($min, $max);

    // // On fait ensuite la somme de toutes les valeurs du tableau
    // // Puis on la divise par la longueur du tableau (sizeof())
    // $moyenne = array_sum($totalTemp) / sizeof($totalTemp);


    // echo "La temperature minimale est " . min($min) . "°C.<br>";
    // echo "La temperature maximale est " . max($max) . "°C.<br>";
    // // Enfin on retourne la valeur arrondie à un chiffre après la virgule.
    // return round($moyenne, 1);
    // }

    // echo "Le moyenne du mois est " . rendreTemperatureMoyenne($mois);
    //TEST FONCTIONNEL MAIS VALEURS MIN ET MAX NON RECUPERALE ULTERIEUREMENT

    function rendreTemperatureMoyenne(array $mois): float
    {

        $min = getValues($mois, 'temperature min');
        $max = getValues($mois, 'temperature max');

        // On met tout ça dans un seul tableau :
        $totalTemp = array_merge($min, $max);

        // On fait ensuite la somme de toutes les valeurs du tableau
        // Puis on la divise par la longueur du tableau (sizeof())
        $moyenne = array_sum($totalTemp) / sizeof($totalTemp);

        // Enfin on retourne la valeur arrondie à un chiffre après la virgule.
        return round($moyenne, 1);
    }

    echo 'La température moyenne est de ' . rendreTemperatureMoyenne($mois) . ' °C. <br>';


    /**
     * Fonction qui permet de récupérer toutes les valeurs minimum ou maximum de mon tableau mois.
     * @param array $mois le tableau des jours avec leurs stats
     * @param string $format soit 'max' soit 'min'
     * @return array un tableau de valeurs récupéré du tableau mois.
     */
    function getValues(array $mois, string $format): array
    {
        if ($format === "temperature min" || $format === "temperature max") {
            foreach ($mois as $jour => $stats) {
                $resultat[] = $stats[$format];
            }
            return $resultat;
        } else {
            throw new ErrorException("Le format doit être soit 'temperature max', soit 'temperature min'");
        }
    }

    $min = getValues($mois, 'temperature min');
    $max = getValues($mois, 'temperature max');

    echo 'La température minimum du mois est de ' . min($min) . ' °C. <br>';
    echo 'La température maximum du mois est de ' . max($max) . ' °C. <br>';
    ?>
    <h3>Exercice TEMPERATURE : Affichage du graphique</h3>
    <div id="conteneur" style="display: flex; flex-direction: row-reverse;">
        <div id="legend"></div>
        <?php
        foreach ($mois as $jour => $stats) { ?>
            <div id="<?= $jour ?>" classe="pluie" style="height: <?= $stats['pluie en mm'] ?>px; width: 30px; background-color: red; border: 1px solid black "></div>
        <?php }
        ?>
        <div id="jour_1"></div>
    </div>

</body>

</html>