// Votre code JS ici
let para2 = document.querySelector("#section2 #para2");

setTimeout(() => {
  para2.style.color = "blue";
}, 1000);

setTimeout(() => {
  document.querySelector("#section2").style.border = "dotted 5px black";
}, 2000);

setTimeout(() => {
  document.querySelector("#section2 .colorful").style.backgroundColor =
    "orange";
}, 3000);

setTimeout(() => {
  document.querySelector("#section1 h2").style.fontStyle = "italic";
}, 4000);

setTimeout(() => {
  document.querySelector("p .colorful").style.display = "none";
}, 5000);

setTimeout(() => {
  para2.textContent = "modified by JS";
}, 6000);

setTimeout(() => {
  document.querySelector("#section1 a").href = "https://www.lilo.org/";
}, 7000);

setTimeout(() => {
  document.querySelector("#section1 a").href = "https://www.lilo.org/";
}, 8000);

setTimeout(() => {
  document.querySelector("#section2 h2").classList.add("big-text");
}, 9000);

setTimeout(() => {
  let tableauP = document.querySelectorAll("p");
  console.log(tableauP);

  // Manière avec forEach
  tableauP.forEach(function (ligne) {
    ligne.style.fontStyle = "italic";
  });

  // Manière avec for incrémenté
  for (let i = 0; i < tableauP.length; i++) {
    tableauP[i].style.fontStyle = "italic";
  }

  // Manière avec for en lecture de valeur
  for (let ligne of tableauP) {
    console.log(ligne);
    ligne.style.fontStyle = "italic";
  }

  // Manière avec for en lecture d'index
  for (let ligne in tableauP) {
    console.log("tableauP[ligne]");
    console.log(tableauP[ligne]);
    tableauP[ligne].style.fontStyle = "italic";
  }
}, 10);
