<?php 
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // SUMA
    $suma=$valorA+$valorB;
    echo "La suma de ambos números es ".$suma."."."<br>";
    // RESTA
    $resta=$valorA-$valorB;
    echo "La resta de ambos números es ".$resta."."."<br>";
    // MULTIPLICACIÓN
    $multi=$valorA*$valorB;
    echo "La multiplicación de ambos números es ".$multi."."."<br>";
    // DIVISIÓN
    $divi=$valorA/$valorB;
    echo "La división de ambos números es ".$divi."."."<br>";

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>

<body>
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>