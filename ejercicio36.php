<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
</head>

<body>
    <!-- FUNCION INCLUDE -->
    <!-- INCLUDE ONCE IDENTIFICA QUE EL DOCUMENTO QUE SE ESTÁ REQUIRIENDO SI SON IGUALES, SÓLO DEJAN UNO -->
    <?php include_once 'ejercicio36_1.php'; ?>
    <?php include_once 'ejercicio36_1.php'; ?>
    <!-- ERROR DE ARCHIVO AL NO ESTAR PRESENTE NO IMPIDE EL LLAMADO DE OTROS ELEMENTOS -->
    <!-- <?php include 'ejercicio36_.php'; ?> -->
    <?php echo "<br>" . "Hola, estoy en la página principal."; ?>

</body>

</html>