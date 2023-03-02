<?php
//Lectura de arreglos
$mes = array("Enero", "Febrero", "M" => "Marzo", "Abril", "Mayo", "Abril");
$dia = array("L"=>"Lunes", "Martes", "Miercoles" , "Jueves", "Viernes");
print_r($mes);
echo $mes[2];
echo $mes["M"];
//Leer todo los datos del arreglo
for ($indice = 0; $indice < 5; $indice++) {
    //índice dinámico for va creciendo
    echo $mes[$indice]."<br>";
}
//$dia pasamos como $indice ,asignamos valor.
foreach($dia as $indice=>&$valor){
    //Imprimimos indices
    echo " El valor es: ".$valor."<br>"."Tiene el índice: ".$indice;
}
    ?>

