<?php
session_start();

$_SESSION['USUARIO'] = $usuario
if(!$_SESSION["autentificado"]){
    header("Location: prueba.php");
}
?>   