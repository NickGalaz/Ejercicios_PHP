<?php 

$jsonContenido='[
    {"NOMBRE":"Nicolas", "APELLIDO":"Galaz"},
    {"NOMBRE":"Miguel", "APELLIDO":"Gallardo"}
]';

$resultado= json_decode($jsonContenido);
// print_r($resultado);

foreach($resultado as $persona){
    echo ($persona->NOMBRE)." ".($persona->APELLIDO)."<br>";
}

?>