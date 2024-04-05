export default class BarreDeVie {
  #id;
  #vie;
  #couleur;

  constructor(vie = 100, couleur = "green") {
    this.id = this.idAleatoire();
    this.vie = vie;
    this.couleur = couleur;

    this.creerHTML();
  }

  get id() {
    return this.#id;
  }
  set id(id) {
    this.#id = id;
  }

  get vie() {
    return this.#vie;
  }
  set vie(vie) {
    if (vie < 0) {
      // alert('Game Over !');
    } else if (vie > 100) {
      // alert('Tricheur !');
    } else {
      this.#vie = vie;
    }
  }

  get couleur() {
    return this.#couleur;
  }

  set couleur(couleur) {
    if (this.vie >= 75) {
      this.#couleur = "green";
    } else if (this.vie < 75 && this.vie >= 35) {
      this.#couleur = "orange";
    } else {
      this.#couleur = "red";
    }
  }

  get barre() {
    return this.conteneur.querySelector(".barre div");
  }

  get texteVie() {
    return this.conteneur.querySelector(".barre p");
  } 

  get conteneur() {
    return document.getElementById(this.id);
  }

  get boutonPerdreVie() {
    return this.conteneur.querySelector(".perdre");
  }

  get boutonGagnerVie() {
    return this.conteneur.querySelector(".gagner");
  }

  //   METHODE
  idAleatoire() {
    return Math.floor(Math.random() * 10000);
  }
  creerHTML() {
    let affichage = document.getElementById("AffichageBarresDeVie");
    let conteneur = document.createElement("div");
    conteneur.id = this.id;

    affichage.appendChild(conteneur);

    let barre = document.createElement("div");
    barre.classList.add("barre");
    barre.style.textAlign = "center";

    conteneur.appendChild(barre);

    let texteVie = document.createElement("p");
    texteVie.textContent = this.vie + "/100";

    barre.appendChild(texteVie);

    let vie = document.createElement("div");
    vie.style.backgroundColor = this.couleur;
    vie.style.height = "20px";
    vie.style.width = this.vie + "%";

    barre.appendChild(vie);

    let boutonPerdreVie = document.createElement("button");
    boutonPerdreVie.classList.add("perdre");
    boutonPerdreVie.textContent = "Perdre de la vie";

    conteneur.appendChild(boutonPerdreVie);

    let boutonGagnerVie = document.createElement("button");
    boutonGagnerVie.classList.add("gagner");
    boutonGagnerVie.textContent = "Gagner de la vie";

    conteneur.appendChild(boutonGagnerVie);
  }
  perdreVie(quantiteVieAEnlever) {
    this.vie = this.vie - quantiteVieAEnlever;
    this.couleur = this.couleur;
    this.modifierHTML();
  }

  gagnerVie(quantiteVieAAjouter) {
    this.vie = this.vie + quantiteVieAAjouter;
    this.couleur = this.couleur;
    this.modifierHTML();
  }

  modifierHTML() {
    this.texteVie.textContent = this.vie + "/100";
    this.barre.style.width = this.vie + "%";
    this.barre.style.backgroundColor = this.couleur;
  }
}
