<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br><br>
P&aacute;gina protegida 2 con sesiones en PHP
<br><br>
<a href="prueba.php">Ir a la primer p&aacute;gina  segura</a>
<br><br>
<a href="salir.php">Salir</a>