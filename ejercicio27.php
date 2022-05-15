<?php

class unaClase{
    public static function unMetodo(){
        echo "Hola soy un método estático.";
    }
}

// METODO NORMAL
$obj= new unaClase();
$obj->unMetodo();

// LLAMADO DE METODO ESTATICO
unaClase::unMetodo();


?>