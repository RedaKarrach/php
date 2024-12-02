<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentaire = htmlspecialchars($_POST["commentaire"]);
    $horodatage = date("Y-m-d H:i:s");

    if (!isset($_SESSION["commentaires"])) {
        $_SESSION["commentaires"] = array();
    }

    $_SESSION["commentaires"][] = array(
        "commentaire" => $commentaire,
        "horodatage" => $horodatage
    );

    echo "<h2>Commentaire ajouté</h2>";
}

// Afficher tous les commentaires soumis
if (isset($_SESSION["commentaires"]) && count($_SESSION["commentaires"]) > 0) {
    echo "<h2>Commentaires soumis</h2>";
    foreach ($_SESSION["commentaires"] as $commentaire) {
        echo "<p><strong>" . $commentaire["horodatage"] . ":</strong> " . $commentaire["commentaire"] . "</p>";
    }
} else {
    echo "<p>Aucun commentaire soumis pour le moment.</p>";
}
?>