<?php 
// Recepcionar datos
// Varible eqivalente
$txtNombre="";
$rdgLenguaje="";
$chkphp="";
$chkhtml="";
$chkcss="";
$lsCine="";

if ($_POST){
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    // print_r($rdgLenguaje);
    // print_r($_POST);
// Recepcionamos 
$chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
$chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
$chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";
// Cine
$lsCine= (isset($_POST['lsCine']))?$_POST['lsCine']:"";
// print_r($_POST);
// print_r($lsCine);
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
    <br>
    <strong>Tu lenguaje es:</strong> <?php echo $rdgLenguaje;?>
    <br>
    <strong>Tu lenguaje es:</strong><br>
    - <?php echo ($chkphp=="checked")?"PHP":""; ?><br>
    - <?php echo ($chkhtml=="checked")?"HTML":""; ?><br>
    - <?php echo ($chkcss=="checked")?"CSS":""; ?><br> 
    <br>
    <strong>Tu lenguaje es:</strong><?php echo $lsCine; ?> 
    <br>
    <?php } ?>
    <!-- ------------------------- -->
    <form action="ejercicio38.php" method="post">
    <!-- Tipo texto , value se conserva valor-->
    Nombre:<br>
    <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
    <br>

    Te gusta programar?:<br>
    <br> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""><br>
    <br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""><br>
    <br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css"  id=""><br>

    Aprender programación PHP...<br>
    <br> php:<input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id="">
    <br> html:<input type="checkbox" <?php echo $chkhtml;?> name="chkhtlm" value="si"  id="">
    <br> css:<input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si"  id="">
    <br>

    Cine favorito?...<br>
    <select name="lsCine" id="">
        <!-- Selected queda seleccionado para opcion en el campo -->
        <option value="">[Ninguna pelicula]</option>
        <option value="anillo"<?php echo ($lsCine=="anillo")?"selected":""; ?> >El señor de los anillos</option>
        <option value="mariposa" <?php echo ($lsCine=="mariposa")?"selected":""; ?> >Efecto mariposa</option>
        <option value="soldado"<?php echo ($lsCine=="soldado")?"selected":""; ?> >Salvando al soldado Ryan</option>
    </select>
    <!-- Enviar información -->
    <input type="submit" value="Enviar información">

    </form>
</body>
</html>