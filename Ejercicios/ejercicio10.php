<?php 
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    //Condicionales anidados
    if($valorA == $valorB){
        echo "El valor de A es igual que el valor de B </br>";
    if($valorA == 5){
        echo "El valor es 5 </br>";
    }
    if($valorA == 3){
        echo "El valor es 3 </br>";

    if($valorA == 5){
        echo "El valor es 5 </br>";
    }
    }
    if(($valorA==$valorB) && ($valorA==5)){
        echo "El valor de A es igual al valor de B es numero 5";
    }
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
    <form action="ejercicio10.php" method="post">
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