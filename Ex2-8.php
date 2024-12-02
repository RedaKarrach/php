<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["produits"])) {
        $produits_selectionnes = $_POST["produits"];
        $total = 0;

        echo "<h2>Produits sélectionnés</h2>";
        echo "<ul>";

        foreach ($produits_selectionnes as $produit) {
            list($nom, $prix) = explode("-", $produit);
            $total += (float)$prix;
            echo "<li>$nom : $prix €</li>";
        }

        echo "</ul>";
        echo "<p>Total : $total €</p>";
    } else {
        echo "<p>Aucun produit sélectionné.</p>";
    }
}
?>