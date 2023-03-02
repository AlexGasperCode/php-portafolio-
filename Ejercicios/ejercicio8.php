<?php 
//Operadores relacionales
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
//Condición
if($valorA > $valorB){
        echo "El valor de A es mayor al valor de B";
    }
if($valorA < $valorB){
        echo "El valor de A es menor al valor de B";
    }
if($valorA == $valorB){
        echo "El valor de A es igual al valor B";
    }
    if($valorA != $valorB){
        echo "El valor de A es diferente al valor de B";
    }
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
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" name="Calcular" id="">
    </form>
</body>
</html>