<?php 
$nombreArchivo="archivo.txt";

$contenidoArchivo="Hola, saludos";
// APERTURA DEL ARCHIVO EN MODO ESCRITURA
$archivoCrear=fopen($nombreArchivo, "w");
// ESCRITURA DEL ARCHIVO
fwrite($archivoCrear, $contenidoArchivo);
fclose($archivoCrear);

?>