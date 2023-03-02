<?php
//Variable de session la establecemos siempre y cuando la iniciemos
//La session se pierde en el navegador por servidor 
session_start();
if(isset($_SESSION["usuario"])){
    echo "Usuario:".$_SESSION["usuario"]."estatus:".$_SESSION["estatus"];
}else{
    echo "No hay datos";
}
echo "Usuario: ".$_SESSION["usuario"]."estatus:".$_SESSION["estatus"];
?>