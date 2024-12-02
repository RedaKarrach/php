<?php 
$employes = array(
    array("nom" => "Reda", "poste" => "Data analyst",  "salaire" => 15000),
    array("nom" => "Idrissi", "poste" => "Data scientist",  "salaire" => 14000),
    array("nom" => "Oubakouz", "poste" => "Software engineer",  "salaire" => 16000),
    array("nom" => "Bouzidi", "poste" => "Cloud engineer",  "salaire" => 17000),
    array("nom" => "Bouna", "poste" => "Developper",  "salaire" => 12000)
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomRecherche = htmlspecialchars($_POST["username"]);
    $employeTrouve = null;

    foreach ($employes as $employe) {
        if (strcasecmp($employe['nom'], $nomRecherche) == 0) {
            $employeTrouve = $employe;
            break;
        }
    }

    if ($employeTrouve) {
        echo "<h2>Informations sur l'employé trouvé</h2>";
        echo "<p>Nom: " . $employeTrouve['nom'] . ", Poste: " . $employeTrouve['poste'] . ", Salaire: " . $employeTrouve['salaire'] . "</p>";
    } else {
        echo "<p>Aucun employé trouvé avec le nom '$nomRecherche'.</p>";
    }
}
?>

