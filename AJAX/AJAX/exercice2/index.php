<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <div>
        <label for="nom">Nom : </label>
        <input type="text" id="nom">
    </div><br>
    <div>
        <label for="prenom">Prenom : </label>
        <input type="text" id="prenom">
    </div><br>
    <div>
        <label for="age">Age : </label>
        <input type="number" id="age">
    </div><br>



    <button onclick="request()">Se connecter au serveur</button>
    <div id="request"></div>

</body>

<script src="./script.js"></script>

</html>