<?php
//GET envio de un elemento por medio de html
//Método get los oculta y los recepciona
if($_GET){
    $nombre=$_GET['nombre'];
    echo "Desarrollo con PHP ".$nombre;
}
?>