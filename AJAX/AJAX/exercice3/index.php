<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" required>
    </div><br>
    <div>
        <label for="age">Âge :</label>
        <input type="number" id="age" required>
    </div><br>

    <button onclick="appelAjax()">Envoyer</button>
    <div id="response"></div>


    <script>
        const response = document.getElementById('response');

        function appelAjax() {
            const prenom = document.getElementById('prenom').value;
            const age = document.getElementById('age').value;
            const request = new XMLHttpRequest();

            request.open('POST', 'traitement.php', true);

            request.setRequestHeader('Content-Type', 'application/json');

            let data = JSON.stringify({
                'prenom': prenom,
                'age': age
            });

            request.send(data);

            request.onreadystatechange = function() {
                if (request.readyState === 4 && request.status === 200) {
                    response.innerHTML += JSON.parse(request.responseText) + "<br>";
                }
            }

        }
    </script>
</body>

</html>