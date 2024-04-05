<?php
echo "Hello World<br>";

$prenom = "Tonie";

if ($prenom == "Tonie") {
    echo "Bonjour, créateur !<br>";
} else {
    echo "Bonjour $prenom <br>";
}

$tableau = ["Tonie", "Elodie", "Raphael", "Sanaa", "Amal", "Laurent", "Dimitri", "Aubin", "Killian", "Rodrigo"];

if (in_array($prenom, $tableau)) {
    echo "bonjour $prenom ! <br>";
} else {
    echo "bonjour bel(le) inconnu(e) <br>";
}

foreach ($tableau as $clef => $valeur) {
    echo "Bonjour $valeur <br>";
}

echo "<br><br><h3> Boucle while avec arrêt</h3>";

$i = 0;
while ($tableau[$i] != "Rodrigo") {
    echo "Bonjour $tableau[$i] <br>";
    $i++;
}

echo "<br><br><h3> Boucle for jusqu'à 5</h3>";

for ($i = 0; $i < 5; $i++) {
    echo "Bonjour $tableau[$i] <br>";
}

echo "<br><br><h3> Boucle for jusqu'à 6</h3>";

for ($i = 0; $i < 5; $i++) {
    if ($i > 5) {
        break;
    } else {
        echo "Bonjour $tableau[$i] <br>";
    }
}

echo "<br><br><h3>Exercice Zoo</h3>";

$zoo = [
    'lion' => ['viande', TRUE],
    'loup' => ['viande', FALSE],
    'tigre' => ['viande', TRUE],
    'panthère' => ['viande', FALSE],
    'éléphant' => ['fourrage', TRUE],
    'girafe' => ['fourrage', FALSE],
    'antilope' => ['fourrage', FALSE],
    'gerbille' => ['graines', TRUE],
    'perroquet' => ['graines', FALSE],
    'paon' => ['graines', FALSE],
];

foreach ($zoo as $animal => $nourriture) {

    if ($nourriture[1] == TRUE) {
        echo "$animal a mangé <br><br>";
    } elseif ($nourriture[1] == FALSE) {
        echo "$animal n'a pas mangé <br>";
        echo "Le gardien s'acccuoe des $animal<br><br>";
        $nourriture[1] = TRUE; //temporaire
        $zoo[$animal][1] = TRUE; //pérenne
        var_dump($nourriture);
    }
}


$validation = FALSE;

while ($validation !== TRUE) {


    foreach ($zoo as $animal => $nourriture) {

        if ($nourriture[1] == TRUE) {
            echo "$animal a mangé <br><br>";
            $validation = TRUE;
        } elseif ($nourriture[1] == FALSE) {
            echo "$animal n'a pas mangé <br>";
            echo "Le gardien s'acccuoe des $animal<br><br>";
            $nourriture[1] = TRUE; //temporaire
            $zoo[$animal][1] = TRUE; //pérenne
            var_dump($nourriture);
            $validation = FALSE;
        }
    }
}
