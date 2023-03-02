<?php
//Ejercicio 1
$ciudades = array("Quito" , "Buenos Aires" , "Medellin" , "Lima" , "Santiago");
    echo "Vamos a insertar: <br>";
    foreach ($ciudades as $ciudad){
        echo $ciudad . "<br>";
    }
    array_push($ciudades, "Montevideo" , "La Paz");
    {
        echo $ciudad. "<br>";
    }
//Ejercicio 2
$equipos = array("Liga de Quito" , "Boca Junior" , "Sao Pablo" , "Real Madrid" , "Colo colo");
echo "El último elemento es: " . array_pop($equipos) . "<br>";
foreach ($equipos as $ciudad1){
    echo $ciudad1 . "<br>";
}
//Ejercicio 3
$ciudades3 = array("Quito" , "Buenos Aires" , "Medellin" , "Lima" , "Santiago");
    echo array_search("Medellin" , $ciudades3);
//Ejercicio 4
$ciudades4 = array("Quito" , "Buenos Aires" , "Medellin" , "Lima" , "Santiago");
sort($ciudades4);
echo "Array ordenado <br>";

foreach ($ciudades4 as $ciudad4)
{
    echo $ciudad4 . "<br>";
}
?>