<!-- Nos permite leer archivos json -->
<!-- Podemos consumir en json , avecsnos llega en string , para ello es necesario convertir a string -->
<?php 
$jsonContenido='[
    {"nombre":"Luis","apellido":"programador"},
    {"nombre":"Carlos Tola", "apellido":"Perez"}
]';
// Decodificar el contenido
$resultado= json_decode($jsonContenido);
print_r($resultado);

foreach($resultado as $persona){
    print_r($persona);
    // print_r($persona->nombre);
    echo ($persona->nombre)." ".($persona->apellido)."<br>";
}

?>
