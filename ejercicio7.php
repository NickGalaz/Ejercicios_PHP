<?php
// PRIMERO LLAMADO DE VARIABLE
$edad=34; //VARIABLE

echo $edad."<br>";

// SEGUNDO LLAMADO DE VARIABLE
$edad=40; //CAMBIAR VALOR VARIABLE

echo $edad."<br>";

// USO DE CONSTANTE
define("NOMBRE", "MIGUEL");

// IMPRIMIR CONSTANTE NOMBRE
echo NOMBRE;

// ERROR DEBIDO A QUE LA CONSTANTE NO PUEDE SER CAMBIADA
// NOMBRE="Nicolas";
// echo NOMBRE;

?>