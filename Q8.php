<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choix = htmlspecialchars($_POST["Choix"]);

    if (!empty($choix)) {
        echo "Votre couleur préférée est : $choix";
    } else {
        echo "Veuillez choisir une couleur.";
    }
}
?>