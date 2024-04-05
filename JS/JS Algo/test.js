// MON TRAVAIL

// let cote = 5;
// let unite = null ;
// let surface = cote*cote;

// function remplirDiv (cote, unite){
//   if (unite !== "m"){
//     if (unite =="km"){
//       cote = cote*1000;
//     }
//     if (unite == "cm"){
//       cote = cote/100;
//     }
//   }

// surface = cote*cote;

// console.log ("La surface est de " + surface + unite)
// }
// remplirDiv (5,"m")

// CORRECTION

function FaireUnCalcul() {
  let unite = prompt("Quelle est l'unité utilisée ? m, cm, km ?");
  let cote = prompt("Quelle est la longueur du côté");
  let aire = null;

  if (unite !== "m" && unite !== "cm" && unite !== "km") {
    unite = prompt(
      "Merci de choisir une unité parmi celles demandés : m, cm, km."
    );
  }

  switch (unite) {
    case "m":
      aire = cote * cote;
      break;
    case "cm":
      aire = (cote * cote) / 100;
      break;
    case "km":
      aire = cote * cote * 1000;
      break;
    default:
      aire = "ERROR !!!";
  }

  alert("La surface est de " + aire + "m²");
}

//EXERCICE IMC
// ma version
// function CalculerUnIMC() {
//   let masse = prompt(
//     "Quel poids faites vous ? Merci de renseigner le poids en Kg."
//   );
//   let taille = prompt(
//     "Quelle taille faites vous ? Merci de renseigner la valeur en m."
//   );
//   let IMC = null;

//   IMC = masse / (taille * taille);

//   if (IMC >= 25) {
//     alert("Vous êtes en surpoids");
//   }
//   if (IMC <= 18) {
//     alert("Vous êtes en souspoids");
//   } else {
//     alert("Vous êtes en bonne santé");
//   }
// }

function CalculerUnIMC() {
  let poids = prompt("Quel est votre poids (en Kg) ?");
  let taille = prompt("Quel est votre taille (en m) ?");
  let IMC = null;

  IMC = poids / (taille * taille);
  IMC = IMC.toFixed(2);

  if (IMC == 0) {
    alert("Il fallait rentrer votre taille en mètres.");
  } else {
    alert("Votre IMC est de " + IMC);

    if (IMC > 25) {
      alert("Vous êtes en surpoids");
    } else if (IMC < 18) {
      alert("Vous êtes en souspoids");
    } else {
      alert("Vous êtes en bonne santé");
    }
  }
}
