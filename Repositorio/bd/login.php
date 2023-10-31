<?php
include_once 'signup.php';
$objeto = new conexion();
$conexion = $objeto->conectar();
try


print_r($conexion);
?>