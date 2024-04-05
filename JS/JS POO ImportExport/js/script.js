import BarreDeVie from "./BarreDeVie.js";

const tableau = [];
tableau.push(new BarreDeVie());
tableau.push(new BarreDeVie());

tableau.forEach((barre) => {
  barre.boutonPerdreVie.addEventListener("click", () => {
    barre.perdreVie(10);
  });
  barre.boutonGagnerVie.addEventListener("click", () => {
    barre.gagnerVie(5);
  });
});
