<?php
// VARIABLES
$txtName = "";
$rdgLenguaje = "";
$chkphp = "";
$chkhtml = "";
$chkcss = "";
$lsAnime = "";
$txtComentario = "";


if ($_POST) {
    // INSTRUCCION DE INSERTAR O RUTINA DE CALCULO
    // Aquí puedes alterar esos valores para mostrar diferentes valores modificados
    $txtName = (isset($_POST['txtName'])) ? $_POST['txtName'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
    $chkphp = (isset($_POST['chkphp'])) == "si" ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml'])) == "si" ? "checked" : "";
    $chkcss = (isset($_POST['chkcss'])) == "si" ? "checked" : "";
    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";
    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";
    // print_r($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) {
    ?>
        <strong>Hola:</strong> <?php echo $txtName; ?>
        <br><strong>Has seleccionado:</strong> <?php echo $rdgLenguaje; ?>
        <br><strong>Estás aprendiendo:</strong><br>
        - <?php echo ($chkphp == "checked") ? "PHP" : ""; ?><br>
        - <?php echo ($chkhtml == "checked") ? "HTML" : ""; ?><br>
        - <?php echo ($chkcss == "checked") ? "CSS" : ""; ?><br>

        <br><strong>El animé que te gusta es:</strong> <?php echo $lsAnime; ?>

        <br><strong>Tu mensaje es:</strong> <?php echo $txtComentario; ?>
    <?php } ?>
    <form action="ejercicio31.php" method="post">
        <strong><br>Nombre:<br></strong>
        <input type="text" value="<?php echo $txtName ?>" name="txtName" id="">
        <br>
        <!-- SELECTOR DE UNA SOLA OPCION -->
        <br>¿Qué lenguaje te gusta?:<br>
        <br>php: <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : ""; ?> name="lenguaje" value="php" id=""><br>
        <br>html: <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : ""; ?> name="lenguaje" value="html" id=""><br>
        <br>css: <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : ""; ?> name="lenguaje" value="css" id=""><br>
        <!-- SELECTOR DE VARIAS OPCIONES -->
        <strong><br>Estás aprendiendo...<br></strong>
        <br>PHP:<input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id=""><br>
        <br>HTML:<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id=""><br>
        <br>CSS:<input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id=""><br>

        <!-- SELECTOR -->
        <strong><br>¿Qué anime te gusta?<br></strong><br>
        <select name="lsAnime" id="">
            <option value="">[Ninguna Serie]</option>
            <option value="Shingeki no Kyojin" <?php echo ($lsAnime == "Shingeki no Kyojin") ? "selected" : ""; ?>>Shingeki no Kyojin</option>
            <option value="Haikyuu!!" <?php echo ($lsAnime == "Haikyuu!!") ? "selected" : ""; ?>>Haikyuu!!</option>
            <option value="Diamond no Ace" <?php echo ($lsAnime == "Diamond no Ace") ? "selected" : ""; ?>>Diamond no Ace</option>
            <option value="Ninguno de los presentes" <?php echo ($lsAnime == "Ninguno de los presentes") ? "selected" : ""; ?>>Ninguno de los presentes</option>
        </select>
        <br>

        <!-- CAJA DE COMENTARIO -->
        <br>¿Tienes alguna duda?<br>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario ?>
        </textarea>
        <br>
        <br><input type="submit" value="Enviar información"><br>


    </form>


</body>

</html>