console.log("done");

//                         PARENT

class forme {
  cote;
  couleur;

  constructor(cote, couleur) {
    this.cote = cote;
    this.couleur = couleur;
  }
}

//                         ENFANT

class carre extends forme {
  air;

  constructor(cote, couleur) {
    super(cote, couleur);
    this.air = cote * cote;
    createForme();
  }
  createForme() {
    let formeCarre = document.createElement("div");
    document.body.appendChild(formeCarre);
  }
}
console.log(new carre(2, "red"));

//                         PETIT ENFANT

// class rond extends carre {
//   rayon;
//   radius;
//   constructor(rayon) {
//     super(cote, couleur )
//     this.diametre = rayon * 2;
//   }
// }
// console.log(new rond(2, "orange"));
