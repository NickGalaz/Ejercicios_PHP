<?php 

$server="localhost"; // 127.0.0.1
$user="root";
$password="";

try{
    $conexion= new PDO("mysql:host=$server;dbname=album", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT id, nombre, ruta FROM `fotos`";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();
    
    echo '<pre>';
    print_r($resultado);
    echo '</pre>';

    foreach($resultado as $foto){
        echo ($foto['nombre'])."<br>";
    };

    echo "Conexión establecida y lectura de datos.";

}catch(PDOException $error){
    echo "Conexión erronea.".$error;
}

?>