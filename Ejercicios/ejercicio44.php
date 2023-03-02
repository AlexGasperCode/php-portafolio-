<?php
// Mostrar json en HTML
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";
// Crear un array para consumir datos , array con 2 opciones para activar tipo de solicitudes , me pertmite leer
$opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
// funcion me permite leer el contenido y convertirlo a string , decodificar a objetos
$respuesta= file_get_contents($url,false,stream_context_create($opciones));
// Decodificar y crear un obeto de respuesta
$objRespuesta=json_decode($respuesta);
print_r($objRespuesta);

foreach($objRespuesta->list as $video){
    print_r($video->title);
    print_r($video->channel);
    print_r($video->id);
}
?>
<ul>
    <?php foreach($objRespuesta->list as $video){ ?>
        <!-- Titulo y canal representa un elemento li  -->
        <li><?php echo($video->title); ?> | <?php echo ($video->channel); ?></li>
        <?php } ?>
</ul>