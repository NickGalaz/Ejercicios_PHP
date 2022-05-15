<?php

$archivo="contenido.txt";
// APERTURA DEL ARCHIVO EN MODO LECTURA
$archivoAbierto=fopen($archivo, "r");
// LECTURA DEL ARCHIVO
$contenido=fread($archivoAbierto, filesize($archivo));

echo $contenido;

?>