<?php 

session_start();
$_SESSION["usuario"]="NickGalaz";
$_SESSION["status"]="logueado";

echo "Sesión iniciada."."<br>";

echo "Usuario: ".$_SESSION["usuario"].". Status: ".$_SESSION["status"];

?>