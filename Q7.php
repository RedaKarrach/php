<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = ($_POST["username"]);
    $age = ($_POST["Age"]);


if (filter_var($age, FILTER_VALIDATE_INT) !== false && $age > 0) {
    echo "Bienvenue, $nom, vous avez $age ans !";
} else {
    echo "Erreur: L'âge doit être un entier supérieur à 0.";
}
}

?>