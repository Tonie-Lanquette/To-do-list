class form {
  ID;
  cote;
  couleur;
  constructor(ID, cote, couleur) {
    // les parametres
    this.ID = ID;
    this.cote = cote;
    this.couleur = couleur;
    // les methodes
    this.apparition();
    this.miseEnForme();
  }
  apparition() {
    document.body.innerHTML += `<div id='${this.ID}'></div>`;
  }
  miseEnForme() {
    let form = document.getElementById(this.ID);
    form.style.backgroundColor = this.couleur;
  }
}

class rectangle extends form {
  constructor(ID, cote, couleur, coteB) {
    coteB;
    // les parametres
    super(ID, cote, couleur, coteB);
    this.coteB = coteB;
    // les methodes
    this.miseEnForme();
  }
  miseEnForme() {
    super.miseEnForme();
    let rectangle = document.getElementById(this.ID);
    rectangle.style.width = this.cote + "px";
    rectangle.style.height = this.coteB + "px";
  }
}

let rectangle1 = new rectangle(1, 200, "red", 100);
console.log(rectangle1);

class carre extends rectangle {
  constructor(ID, cote, couleur) {
    // les parametres
    super(ID, cote, couleur, cote);
    // les methodes
    this.miseEnForme();
  }
  miseEnForme() {
    super.miseEnForme();
  }
}

let carre1 = new carre(2, 300, "black");
console.log(carre1);

class rond extends carre {
  radius = 100;
  constructor(ID, diametre, couleur) {
    // les parametres
    super(ID, diametre, couleur);
    // les methodes
    this.miseEnForme();
  }
  miseEnForme() {
    super.miseEnForme();
    let rond = document.getElementById(this.ID);
    rond.style.borderRadius = this.radius + "%";
  }
}

let rond1 = new rond(3, 350, "green");
console.log(rond1);
