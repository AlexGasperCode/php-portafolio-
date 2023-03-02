<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Incluye archivos  -->
    <?php require_once("ejercicio48.php"); ?><br>
    <?php require("ejercicio48.php"); ?><br>
    <?php echo "Hola , esto es un require" ?>
    <!-- Include si esta vacio nos retorna un warning -->
    <!-- Incluye uno -->
    <?php include_once("ejercicio48.php"); ?><br>
    <?php include("ejercicio48.php"); ?>
    <?php echo "Hola , esto es un include" ?>
</body>
</html>