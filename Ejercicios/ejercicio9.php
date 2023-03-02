<?php 
//Operadores lógicos
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
//Condición , && de lo contrario , || , ! , ?
//Si alguna de su condición es falso , es f.
if(($valorA != $valorB) && ($valorA > $valorB)){
        echo "El valor de A es diferente de B y támbien es mayor";
}
//Si alguna de su condición es verdad , es v.
if(($valorA == $valorB) || ($valorA < $valorB)){
    echo "El valor de A es igual de B";
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
    <form action="ejercicio9.php" method="post">
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