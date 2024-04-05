// On definit la classe Todolist, exportable et par defaut :
// ============================================================
export default class Tache {
  // ============================================================

  // On definit ensuite 4 proprietes privees :
  // - #id : il sera construit aleatoirement
  // - #titre
  // - #echeance
  // - #priorite : trois valeurs possibles [basse, moyenne, elevee]
  #id;
  #titre;
  #echeance;
  #priorite;

  // ============================================================
  // CONSTRUCTEUR
  // ============================================================
  // Il devra récupérer les valeurs nécessaire à l'instanciation, puis appeler la méthode creerHTML.
  // Lors de la récupération, il faudra mettre l'ID en dernier (paramètre optionnel), avec la valeur par défaut "à créer".
  // Lorsqu'on récupérera, plus tard, les tâches depuis le localStorage, elles auront déjà leur ID. Mais si c'est une nouvelle tâche, elle n'en aura pas, il faudra alors le créer.
  constructor(titre, echeance, priorite, id = "à créer") {
    this.id = id;
    this.titre = titre;
    this.echeance = echeance;
    this.priorite = priorite;

    this.creerHTML;
  }
  // ============================================================
  // MÉTHODES
  // VOIR PLUS BAS POUR SUIVRE LE DEROULER DE L'EXERCICE
  // ============================================================

  // 1. Commencer par créer les getters et les setters.
  // ID : si il est donné, on lui attribue la valeur donnée, sinon on le crée.
  get id() {
    return this.#id;
  }
  set id(id) {
    this.#id = id === "à créer" ? this.#creerIdAleatoire() : id;
  }
  // titre : rien de particulier pour l'instant (plus tard, on pourra empêcher tous les caractères de code malveillant)

  get titre() {
    return this.#titre;
  }

  set titre(titre) {
    this.#titre = titre;
  }
  // échéance : il faudra un setter qui instancie la date selon Date() (voir la doc : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Date)

  set echeance(echeance) {
    this.#echeance = new Date(echeance);
  }

  // il faudra ensuite lui faire deux getters :
  // - l'un pour afficher la date dans le HTML avec un format lisible par les humains français (voir la doc : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat)

  get echeance() {
    return new Intl.DateTimeFormat("fr-FR", { dateStyle: "long" }).format(
      new Date(this.#echeance)
    );
  }
  // - l'autre qui la retourne dans le format dans lequel elle a été enregistrée.
  get echeanceToDate() {
    return this.#echeance;
  }
  // priorité : un setter qui appelera une méthode privée definirPriorite(priorite), et un getter normal.
  set priorite(priorite) {
    this.priorite = this.#definirPriorite(priorite);
  }
  get priorite() {
    return this.#priorite;
  }

  // 2. constuire ensuite la méthode creerIdAleatoire, privée, qui retournera un nombre entier compris entre 0 et 1000000
  #creerIdAleatoire() {
    return Math.floor(Math.random() * 10000);
  }
  // 3. construire la méthode definirPriorite, qui prendra la priorité donnée en paramètre, eten fonction de sa valeur, renverra un tableau contenant deux valeurs comme ceci :
  // { classe: "basse", intitulé: "Non prioritaire" }
  // la classe permettra de mettre le bon style dans le HTML, tandis que l'intitulé sera ce qui sera affiché à l'utilisateur.
  // Si vous avez un doute, allez voir index.html, les trois tâches écrites en dur vous permettront de comprendre.
  #definirPriorite(priorite) {
    switch (priorite) {
      case "basse":
        return { class: "basse", intitule: "Non prioritaire" };
        break; //toujours un break a la find'un "case" mais ici return stop déjà
      case "moyenne":
        return { class: "moyenne", intitule: "Prioritaire" };
        break;
      default:
        return { class: "elevee", intitule: "Urgene" };
        break;
    }
  }
  // 4. Construire ensuite la méthode creerHTML, qui reprendra justement le html et remplacera les textes, Id et classes par les variables de notre objet Tache. Une fois le HTML prêt il sera ajouté à la liste des tâches dans la page.
  creerHTML() {
    let HTML = `<div id="tache-${this.id}">
        <span id="check-${this.id}" class="checkbox">□</span>
        <div>
          <h3>${this.titre}</h3>
          <span class="priorite ${this.priorite.class}">${this.priorite.intitule}</span>
          <span class="dateEcheance">${this.echeance}</span>
          <hr>
        </div>
      </div>`;

    document.querySelector(".listeDesTaches").innerHTML += HTML;
  }
  // 5. Une dernière méthode nous permettra d'enregistrer les tâches en mémoire dans le localStorage. Pour cela, nous devons donner les 4 propriétés sous un format de tableau, et le retourner. Rien de plus ici, la suite se passe dans la classe Todoliste
  get objetToJSON() {
    let objet = {
      id: this.id,
      titre: this.titre,
      echeance: this.echeanceToDate,
      priorite: this.priorite,
    };
    return objet;
  }
}
