<?php
//Agregar la condicional apra eliminar error de undefined no enviado valor
if($_POST){
 //Recepción de formulario html método POST
$nombre=$_POST['txtNombre'];
//Concatenar "".
echo "Estudiante".$nombre;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Hol, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Desarrollo con PHP
    <!--Realiza un envío a ejercicio2 -->
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
    </br>
        <input type="submit" value="Enviar">
</form>
</body>
</html>
<!-- método post nos permite recepcionar información -->