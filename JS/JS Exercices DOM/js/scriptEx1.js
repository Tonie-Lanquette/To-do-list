// Votre code JS ici

setTimeout(() => {
  let para2 = document.querySelector("#para2");
  para2.style.color = "blue";
}, 1000);

setTimeout(() => {
  let section2 = document.querySelector("#section2");
  section2.style.border = "dotted black";
}, 2000);

setTimeout(() => {
  let h2s2 = document.querySelector("h2.colorful");
  h2s2.style.backgroundColor = "orange";
}, 3000);

setTimeout(() => {
  let h2s1 = document.querySelector("#section1 h2");
  h2s1.style.fontStyle = "italic";
}, 4000);

// let h2s1 = document.querySelector("#section1 h2");
// h2s1.style.fontStyle = "italic";

setTimeout(() => {
  let colorfulHidden = document.querySelector("p .colorful");
  colorfulHidden.style.display = "none";
}, 5000);

setTimeout(() => {
  let para2Change = document.getElementById("para2");
  para2Change.innerText = "modified by JS";
}, 6000);

setTimeout(() => {
  let changeURL = document.querySelector("#section1 a");
  changeURL.href = "https://www.lilo.org/";
}, 7000);

setTimeout(() => {
  let h2s2 = document.querySelector("#section2 h2");
  h2s2.classList.add("big-text");
}, 8000);

setTimeout(() => {
  let allP = document.querySelectorAll("p");
  allP.forEach((element) => {
    element.style.fontStyle = "italic";
  }, 9000);
});
// // Manière avec for incrémenté

// for (let i = 0; i < allP.length; i++) {
//   allP[i].style.fontStyle = "italic";
// }

// // Manière avec for en lecture de valeur

// for (let ligne of allP) {
//   ligne.style.fontStyle = "italic";
// }

// for (let ligne in allP) {
//   allP[ligne].style.fontStyle = "italic";
// }
