<?php
//Ejemplo 1
declare (strict_types=1);
/*Enviar un argumento , en este caso un email , en la declaración de la función se 
define un valor prederteminado*/
function guardarTelefonos(string $numero = "304003403" , array $telefonos = array())
{
    array_push($telefonos , $numero);
    return $telefonos;
}

function mostrarTelefonos(array $telefonos)
{
    foreach ($telefonos as $telefono)
    {
        echo $telefono . "<br>";
    }
}
$telefonos = array();

$telefonos = guardarTelefonos("0943455848" , $telefonos);
$telefonos = guardarTelefonos("0869584859" , $telefonos);
$telefonos = guardarTelefonos("0999847574" , $telefonos);
$telefonos = guardarTelefonos("0973456434" , $telefonos);
$telefonos = guardarTelefonos("0845685848" , $telefonos);

mostrarTelefonos($telefonos);
?>