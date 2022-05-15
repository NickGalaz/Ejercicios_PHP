<?php 

$frutas=array("Fresa", "Pera", "Manzana");

print_r($frutas);

echo "<br>".$frutas[1]."<br>";



for ($indice=0 ; $indice<3 ; $indice++){
    echo $frutas[$indice]."<br>";
}
?>