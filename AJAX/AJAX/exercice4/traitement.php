<?php

if (isset($_POST['mdp'])) {
    $hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    echo $hash;
}
