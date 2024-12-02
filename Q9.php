<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $Nombre1=$_GET["Nombre1"] ;
    $Nombre2=$_GET["Nombre2"] ;
    $somme= $Nombre1 + $Nombre2 ;
    echo "Le premier nombre est $Nombre1 <br/>";
    echo "Le deuxième nombre est $Nombre2 <br/>";
echo "leur somme:".$somme."";
}
?>