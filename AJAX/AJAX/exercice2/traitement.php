<?php
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age'])) {
    echo "Bonjour " . $_POST['prenom'] . $_POST['nom'] . ", tu as " . $_POST['age'] . " ans.";
}
