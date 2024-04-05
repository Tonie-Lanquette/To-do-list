class Animals {
  constructor(vivant, systemeDigestif) {
    this.vivant = vivant;
    this.systemeDigestif = systemeDigestif;
  }
  respirer() {
    console.log("Je respire");
  }
  manger() {
    console.log("Je mange");
  }
}

///////////////////////////

class Vertébrés extends Animals {
  constructor(vivant, systemeDigestif, squelette) {
    super(vivant, systemeDigestif);
    this.squelette = squelette;
  }
}

///////////////////////////

class Sangchaud extends Vertébrés {
  constructor(vivant, systemeDigestif, squelette, chaleur) {
    super(vivant, systemeDigestif, squelette);
    this.chaleur = chaleur;
  }
  endothermes() {
    console.log("Je produis ma propre chaleur");
  }
}

class Sangfroid extends Vertébrés {
  constructor(vivant, systemeDigestif, squelette, températureExtérieure) {
    super(vivant, systemeDigestif, squelette);
    this.températureExtérieure = températureExtérieure;
  }
  ectotherme() {
    console.log("Ma chaleur dépend de mon milieu");
  }
}

///////////////////////////

class Mammifères extends Sangchaud {
  constructor(vivant, systemeDigestif, squelette, chaleur, mamelles) {
    super(vivant, systemeDigestif, squelette, chaleur);
    this.mamelles = mamelles;
  }
  gestation() {
    console.log("J'ai une gestation interne");
  }
  lactation() {
    console.log("Je produis du lait");
  }
}

class Oiseaux extends Sangchaud {
  constructor(vivant, systemeDigestif, squelette, chaleur, plumes, ailes, bec) {
    super(vivant, systemeDigestif, squelette, chaleur);
    this.plumes = plumes;
    this.ailes = ailes;
    this.bec = bec;
  }
  oeuf() {
    console.log("Je ponds des oeufs pour me reproduire");
  }
  voler() {
    console.log("Je vole");
  }
}

///////////////////////////

class Poissons extends Sangfroid {
  constructor(
    vivant,
    systemeDigestif,
    squelette,
    températureExtérieure,
    branchies
  ) {
    super(vivant, systemeDigestif, squelette, températureExtérieure);
    this.branchies = branchies;
  }
  filtration() {
    console.lag("Je filtre l'eau pour pouvoir respirer");
  }
}
class Reptiles extends Sangfroid {
  constructor(
    vivant,
    systemeDigestif,
    squelette,
    températureExtérieure,
    écailles
  ) {
    super(vivant, systemeDigestif, squelette, températureExtérieure);
    this.écailles = écailles;
  }
  mue() {
    console.log("Je change de peau en grandissant");
  }
}

class Amphibiens extends Sangfroid {
  constructor(
    vivant,
    systemeDigestif,
    squelette,
    températureExtérieure,
    larve
  ) {
    super(vivant, systemeDigestif, squelette, températureExtérieure);
    this.larve = larve;
  }
  croissance() {
    console.log("nait sous forme de larve");
  }
}

/////////////////////////

let corbeau = new Oiseaux(
  "oui",
  "oui",
  "oui",
  "auto - réguler",
  "noire",
  "2",
  "oui"
);
console.log(corbeau.ailes);
corbeau.respirer();
corbeau.manger();
corbeau.endothermes();
