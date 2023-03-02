<?php 
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    //Suma
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplicacion=$valorA*$valorB;
    $division=$valorA/$valorB;
    //Salida
    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$multiplicacion;
    echo "<br>".$division;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
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