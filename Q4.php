<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
    <?php
    $etudiants = array(
        array("nom" => "Karrach", "prenom" => "Reda", "matricule" => "12", "note" => 15),
        array("nom" => "Idrissi", "prenom" => "Youssef", "matricule" => "13", "note" => 14),
        array("nom" => "Oubakouz", "prenom" => "Yassine", "matricule" => "14", "note" => 16),
        array("nom" => "Bouzidi", "prenom" => "Younes", "matricule" => "15", "note" => 17),
        array("nom" => "Bouzidi", "prenom" => "Ismael", "matricule" => "16", "note" => 17)
    );

    $totalNotes = 0;
    $nbrEtudiants = count($etudiants);

   
    foreach ($etudiants as $etudiant) {
        $totalNotes += $etudiant['note'];
    }
    $moyenne = $totalNotes / $nbrEtudiants;
    ?>
    <h1>Informations sur les étudiants</h1>
    <?php foreach ($etudiants as $etudiant) : ?>
        <h3>Etudiant</h3>
        <p>Nom: <?php echo $etudiant['nom']; ?>, Prénom: <?php echo $etudiant['prenom']; ?>, Matricule: <?php echo $etudiant['matricule']; ?>, Note: <?php echo $etudiant['note']; ?></p>
    <?php endforeach; ?>
    <h2>La moyenne des notes des étudiants est de: <?php echo $moyenne; ?></h2>
</body>
</html>