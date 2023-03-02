<?php
session_start();
//Variables de sesión
$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="loqueado";

echo "Session iniciada" . ":<br>";
echo "Usuario:".$_SESSION["usuario"]."estatus: ".$_SESSION["estatus"];
?>