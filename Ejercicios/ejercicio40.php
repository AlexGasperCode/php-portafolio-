<?php 
    if($_POST){
        // Post solo revibe el nombre del archivo
        print_r($_POST);
        // Accedemos por corchetes , dato ,temporal name
        print_r($_FILES['archivo']['name']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Nos llega un array enctype -->
    <form action="ejercicio40.php" enctype="multipart/form-data" method="post">
        Imagen:
        <!-- Input tipo file no le puedo poner una valor por default -->
        <input type="file" name="archivo" id="">
        <br>
        <!-- Envio de archivo y boton -->
        <input type="submit" name="enviar" vale="Enviar información">
    </form>
</body>
</html>