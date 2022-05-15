<?php 
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // SUMA
    $suma=$valorA+$valorB;
    // RESTA
    $resta=$valorA-$valorB;
    // MULTIPLICACIÓN
    $multi=$valorA*$valorB;
    // DIVISIÓN
    $divi=$valorA/$valorB;

    // LLAMADOS
    echo "La suma de ambos números es ".$suma."."."<br>";
    echo "La resta de ambos números es ".$resta."."."<br>";
    echo "La multiplicación de ambos números es ".$multi."."."<br>";
    echo "La división de ambos números es ".$divi."."."<br>";


    // IF ANIDADOS
    if($valorA==$valorB){
        echo "El valor de A es igual al valor de B."."<br>";
        if($valorA==4){
            echo "El valor es 4."."<br>";
        }
        if($valorA==5){
            echo "El valor es 5."."<br>";
        }
    } if( ($valorA == $valorB) && ($valorA == 4) ){
        echo "El valor de A es igual a B y es 4.";
    }

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
    <form action="ejercicio11.php" method="post">
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