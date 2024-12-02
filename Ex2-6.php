<?php

$villes = array(
    array("nom" => "casablanca", "temperature" => 30),
    array("nom" => "rabat", "temperature" => 25),
    array("nom" => "tanger", "temperature" => 27)
);

$max_temperature = 0; 
$ville_la_plus_chaude = null;

foreach ($villes as $ville) {
    if ($ville["temperature"] > $max_temperature) {
        $max_temperature = $ville["temperature"];
        $ville_la_plus_chaude = $ville;
    }
}

if ($ville_la_plus_chaude) {
    echo "<p>La ville la plus chaude est " . $ville_la_plus_chaude['nom'] . ", avec une température de " . $max_temperature . "°C.</p>";
} else {
    echo "<p>Aucune ville trouvée.</p>";
}
?>