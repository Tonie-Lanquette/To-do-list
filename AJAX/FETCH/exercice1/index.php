<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1
    </title>
</head>

<body>
    <button onclick="appelFetch()">Se connecter au serveur</button>

    <div id="retour"></div>

    <script>
        let retour = document.getElementById('retour');

        function appelFetch() {

            fetch('traitement.php', {
                method: "GET",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).then((reponse) => {
                if (!reponse.ok) {
                    throw new Error('Le serveur est inaccessible');
                }
                return reponse.text();

            }).then((data) => {
                retour.innerHTML += data + "<br>"

            }).catch((error) => {
                console.log('une erreur est arrivée : ', error);
            });
        }
    </script>
</body>

</html>