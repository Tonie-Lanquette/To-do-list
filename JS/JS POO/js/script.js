console.log("hi");

class vehicule {
  constructor(modele, moteur, carburant, prix, constructeur) {
    this.modele = modele;
    this.moteur = moteur;
    this.carburant = carburant;
    this.prix = prix;
    this.constructeur = constructeur;
  }

  demarrer() {
    console.log("je démarre");
  }
  arreter() {
    console.log("je m'arrête");
  }
}

let avion = new vehicule("A320", "V60", "Kérosène", "200000", "Airbus");

console.log(avion.modele);
avion.demarrer;
avion.arreter;

let voiture = new vehicule(
  "Alpine",
  "Quatre cylindre 1.8",
  "Essence",
  "75 000",
  "Renault"
);
console.log(voiture.modele);

class moto extends vehicule {
  constructor(modele, moteur, carburant, prix, constructeur, coffre) {
    super(modele, moteur, carburant, prix, constructeur);
    this.coffre = coffre;
  }
  wheeling() {
    console.log("Je wheel fort");
  }
}

let r1 = new moto("R1", "que des V12", "essence", "20$", "Yamaha", "50L");

console.log(r1);
r1.demarrer();
r1.wheeling();

class Fusee extends vehicule {
  #nukeCode = nukeCode;

  constructor(
    modele,
    moteur,
    carburant,
    prix,
    constructeur,
    radio,
    capsules,
    nukeCode
  ) {
    super(modele, moteur, carburant, prix, constructeur);
    this.radio = radio;
    this.capsules = capsules;
    this.#nukeCode = nukeCode;
  }
  decoller() {
    console.log("Je décolle man");
  }

  atterir() {
    console.log("n'existe pas encore, mort imminente");
  }

  reveal() {
    console.log(this.#nukeCode);
  }
}

let ariane5 = new Fusee(
  "Ariane 5",
  "Electrique",
  "Hydrogène",
  "5 carottes",
  "Ariane",
  "Oui",
  "Inexistante",
  "Fuck world"
);

// console.log("test", ariane5.#nukeCode); crash inspecteur
ariane5.reveal();

let infos = document.getElementById("#text");
infos.innerHTML;
