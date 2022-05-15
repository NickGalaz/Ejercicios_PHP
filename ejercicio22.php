<?php

$frutas=array("f"=>"Frutilla", "m"=>"Manzana", "p"=>"Pera");

print_r($frutas);

echo "<br>".$frutas["m"]."<br>";

foreach($frutas as $indice=>&$valor){
    // MUESTRA EL ELEMENTO
    // echo $frutas[$indice]."<br>";
    // MUESTRA EL ALIAS ASIGNADO
    echo $indice."<br>";
    // FORMA IDEAL!
    echo $valor.", ". "tiene el índice: "." ".$indice."<br>";
}

?>