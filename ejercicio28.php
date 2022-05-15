<?php 

$server="localhost"; // 127.0.0.1
$user="root";
$password="";

try{
    $conexion= new PDO("mysql:host=$server;dbname=album", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Inserción desde PHP', 'vsCode.jpg')";
    $conexion->exec($sql);


    echo "Conexión establecida.";

}catch(PDOException $error){
    echo "Conexión erronea.".$error;
}

?>