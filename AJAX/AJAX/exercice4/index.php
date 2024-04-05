<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <h1>Hasher mon mot de passe</h1>
    <form>
        <label for="mdp">Mot de passe : </label><input type="text" id="mdp" required>
        <input type="button" value="Allons-y !" onclick="hashermdp()">
    </form>
    <div id="barre" style="height:10px; background-color:blue; width:0px;"></div>
    <div id="retour"></div>

    <script>
        let barre = document.getElementById('barre');
        let retour = document.getElementById('retour');

        function hashermdp() {

            // définir les variables mdp, barre, reponse.
            let mdp = document.getElementById('mdp').value;
            // créer la requête XMLHttpRequest();

            let xhr = new XMLHttpRequest();
            changerBarre(xhr.readyState);
            // l'ouvrir, en lui donnant 3 paramètres :
            // https://developer.mozilla.org/fr/docs/Web/API/XMLHttpRequest/open

            xhr.open('POST', 'traitement.php', true);
            changerBarre(xhr.readyState);
            // Donner ensuite au header le content-type correspondant : 
            // https://developer.mozilla.org/fr/docs/Web/API/XMLHttpRequest/setRequestHeader
            // https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Content-Type
            // https://developer.mozilla.org/fr/docs/Web/HTTP/Basics_of_HTTP/MIME_types  

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            // Mettre les données dans le bon format :

            let data = "mdp=" + mdp;
            // Envoyer la requête :

            xhr.send(data);
            changerBarre(xhr.readyState);
            // Écouter le changement du retour :

            xhr.onreadystatechange = function() {
                changerBarre(xhr.readyState);
                if (xhr.readyState === 4 && xhr.status === 200) {
                    retour.innerHTML += xhr.responseText;
                }
            }


            // https://developer.mozilla.org/fr/docs/Web/API/XMLHttpRequest/readyState

            // https://developer.mozilla.org/fr/docs/Web/API/XMLHttpRequest/status

            // Si l'état est 4, et le status est 200, alors afficher la réponse.
            // https://developer.mozilla.org/fr/docs/Web/API/XMLHttpRequest/responseText

        }

        function changerBarre(readyState) {
            readyState++;
            barre.style.width = readyState * 20 + '%';
        }
    </script>
</body>