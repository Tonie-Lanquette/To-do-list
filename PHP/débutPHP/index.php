<?php

$prenom = "Jean-Claude"; // Pour créer une variable on met un $

$prenoms = ['Salome', "Yoan", "Sara", "Clement", "Rodrigo"];

const DEFINED_PRENOM = "vrai"; // les constantes sont toujours écrites en maj + snake_case
define('MA_CONST', 'valeur'); // autre façon de faire une variable grâce à une fonction prédefinit PHP

//PascaleCaes
//camelCase
//snake_case

var_dump($prenoms); // C'est comme un console.log 

//Condition
if(DEFINED_PRENOM === "vrai"){
    echo "<h1>Je m'appelle $prenom</h1>"; //Pour afficher une info sur la page
}

foreach($prenoms as $clef => $valeur){
    echo "Bonjour $valeur ! <br>";
}
//Les deux font la même chose mais l'un est simplifié
foreach($prenoms as $valeur){
    echo "Rebonjour $valeur ! <br>";
}


for ($i=0; $i < 5 ; $i++){
    echo "Rebonjour $prenoms[$i] ! <br>";
}

$i = 0;
while ($i <=10){
    echo $i . '<br>'; //Le point pour faire de la concaténation
    echo "$i <br>";
    $i++;
}


switch ($prenom) {
    case 'Jean-Claude':
        echo "Salut Bro <br>";
        break;
    
    default:
        echo "Bonjour Bel.le inconnu.e";
        break;
}


function bonjour($prenom){
    echo "Bonjour $prenom !";
}
bonjour('Alice');

$nom = (string)"Dupont";
//$age = (string) "25"; //definti en tant que caracters
$age = (int) 25; // defini en tant que valeur numéraire
$age = (array) $age;  // defini en tant que valeur d'un tableau
var_dump($age);

if (is_string($nom)){
echo "la variable nom qui contient $nom est une string";
}

function blabla(int $age){
    echo "Vous avez $age ans.";
}

blabla ("22");
blabla (22);//le deux sont juste pour aller chercher (int $age)


/**
 * [calcul_age description]
 *
 * @param   int  $annee  [$annee description]
 *
 * @return  [type]       [return description]
 */
function calcul_age( int $annee)//: int retunr forcement une valeur en int
{
    $dateNow = 2024;
    $age = $dateNow - $annee;

    return $age;
}

$age = calcul_age(1990);
echo "vous avez $age ans.";

// int = entier
// float = nombre à virgule
// string = chaine de caractère
// bool = 0 ou 1
// array = tableau
// void = rien

$apprenants = [
    "apprenant 1" => [
        "prenom" => "Tonie",
        "age" => null
    ],
    "apprenant 2" => [
        "prenom" => "Elodie",
        "age" => null
    ],
    "apprenant 3" => [
        "prenom" => "Raphael",
        "age" => null
    ],

];

var_dump($apprenants);

echo $apprenants["apprenant 1"]["prenom"];

foreach ($apprenants as $apprenant => $infosApprenant ){//dans le tableau $apprenants as=la clef $apprenant
    $prenom = $infosApprenant["prenom"];
echo "le prénom de $apprenant est $prenom. <br>";
} 

?>