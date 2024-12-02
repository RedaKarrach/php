<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 5</title>
</head>
<body>
    <?php
    $pays = array(
 "Maroc"=> 36000000,
        "France"=>67000000,
        "Algerie"=> 45000000
    );
    arsort($pays);
    ?>
<h3>Population des pays</h3>
<?php foreach ($pays as $nom => $population) : ?>
    <p> Pays : <?php echo $nom; ?>, Population: <?php echo number_format ($population);?></p>
<?php endforeach; ?>

    
</body>
</html>