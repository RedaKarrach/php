<?php 
$employes = array(
    array("nom" => "Reda", "poste" => "Data analyst",  "salaire" => 15000),
    array("nom" => "Idrissi", "poste" => "Data scientist",  "salaire" => 14000),
    array("nom" => "Oubakouz", "poste" => "Software engineer",  "salaire" => 16000),
    array("nom" => "Bouzidi", "poste" => "Cloud engineer",  "salaire" => 17000),
    array("nom" => "Bouna", "poste" => "Developper",  "salaire" => 12000)
);

$totalSalaires = 0;
$nbrEmployes = count($employes);
foreach ($employes as $employe) {
    $totalSalaires += $employe['salaire'];
}
$moyenne = $totalSalaires / $nbrEmployes;
?>
<h2>Informations sur les employés</h2>
<?php foreach ($employes as $employe): ?>
    <p>Nom: <?php echo $employe['nom']; ?>, poste: <?php echo $employe['poste']; ?>, Salaire: <?php echo $employe['salaire']; ?></p>
<?php endforeach; ?>
    <h2>La moyenne de salaire des employes est de: <?php echo $moyenne; ?></h2>


