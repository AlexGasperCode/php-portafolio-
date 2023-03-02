<?php 
// Recepcionar datos
// Varible eqivalente
$txtNombre="";
if ($_POST){
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
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
    <!-- Iniciar con una condición posteriormente cerrarla -->
    <?php if($_POST){ ?>
    <strong>Hola</strong>: <?php echo $txtNombre;?>
    <?php } ?>
    <!-- ------------------------- -->
    <form action="ejercicio35.php" method="post">
    <!-- Tipo texto , value se conserva valor-->
    <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
    <!-- Enviar información -->
    <input type="submit" value="Enviar información">

    </form>
</body>
</html>