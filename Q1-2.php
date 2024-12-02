<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1-2</title>
</head>
<body>
<?php
$etudiant = array(
    'nom' => 'Karrach',
    'prenom' => 'Reda',
    'matricule' => '12',
    'Note' => '15'
);
$etudiant['note'] = 18;
?>
<h1>Informations sur l'étudiant</h1>
    <p>Nom: <?php echo $etudiant['nom']; ?></p>
    <p>Prénom: <?php echo $etudiant['prenom']; ?></p>
    <p>Matricule: <?php echo $etudiant['matricule']; ?></p>
    <p>Note:<?php echo $etudiant['Note'];?></p>
</body>

</html>
