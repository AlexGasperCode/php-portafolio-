<?php
    $nombreArchivo="file.txt";
    $contenidoArchivo="Desarrollo web con PHP , para desarrolladores FrontEnd";
    $archivoACrear= fopen($nombreArchivo, "w");
    // Escritura
    fwrite($archivoACrear,$contenidoArchivo);
    fclose($archivoACrear);