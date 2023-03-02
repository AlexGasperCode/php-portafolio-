<?php
$archivo="./contenido.txt";
// Abre el archivo
$archivoAbierto=fopen($archivo,"r");
// fread leemos todo el contenido
$contenido=fread($archivoAbierto,filesize($archivo));
echo $contenido;
?>