<?php
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $TypedeCompte = htmlspecialchars ($_POST["TypedeCompte"]);
if($TypedeCompte == "admin"){
    echo "Bienvenue Administrateur";
}
elseif ($TypedeCompte == "user"){
    echo "Bienvenue Utilisateur";
}
else {
    echo "Erreur de saisie";
}
}

  








?>