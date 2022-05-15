<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web 2</title>
</head>

<body>
    <!-- FUNCIÓN REQUIRE -->
    <!-- REQUIRE ONCE IDENTIFICA QUE EL DOCUMENTO QUE SE ESTÁ REQUIRIENDO SI SON IGUALES, SÓLO DEJAN UNO -->
    <?php require_once "ejercicio37_1.php"; ?>
    <?php require_once "ejercicio37_1.php"; ?>
    <!-- ERROR IMPIDE QUE SE MUESTREN LOS DEMÁS RECURSOS, YA QUE ES UN REQUISITO QUE ESTÉ PRESENTE PARA CARGAR LA PÁGINA-->
    <!-- <?php require "ejercicio37_.php"; ?> -->
    <?php echo "Hola, estoy en la página principal."; ?>


</body>

</html>