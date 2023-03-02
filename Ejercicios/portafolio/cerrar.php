<?php 
session_start();
session_destroy();
// Nos nos permite entra al index
header("location:login.php");
?>