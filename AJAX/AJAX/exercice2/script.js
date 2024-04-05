const response = document.getElementById("request");

function request() {
  const prenom = document.getElementById("prenom").value;
  const nom = document.getElementById("nom").value;
  const age = document.getElementById("age").value;
  const request = new XMLHttpRequest();

  //  open("type/methode", "le fichier/chemin", true or false)
  request.open("POST", "traitement.php", true);

  //   setRequestHeader("Content-type", "applicaion/type d'encodement")
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  //   ensuite on envoie send(parametre ou null)
  request.send("prenom=" + prenom + "nom=" + nom + "age=" + age);

  //   onreadystatechange(jamais de caps) = fonctionannonyme()
  request.onreadystatechange = function () {
    // condition si reussi (readyState(error ou ici 200) && status(4))
    if (request.readyState === 4 && request.status === 200) {
      response.innerHTML += request.responseText + "<br>";
    }
    // else {
    //   response.innerHTML += "<p>erreur</p>";
    // }
  };
}
