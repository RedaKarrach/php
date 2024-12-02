<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Question 3t</title>
</head>
<body>
    <?php   
$produit = array(
   array ( "nom" => "Ordinateur", "prix"=> "15000"),
    array("nom"=>"Souris", "prix"=>"500"),
    array("nom"=> "Clavier","prix"=>"1200")
);
?>

<?php foreach ($produit as $produit) : ?>
    <h3>Produit</h3>
    <p>Nom: <?php echo $produit['nom']; ?>, Prix: <?php echo $produit['prix']; ?></p>
<?php endforeach; ?>

</body>
</html>