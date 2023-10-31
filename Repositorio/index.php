<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulario Login</title>
  <link rel="stylesheet" href="Estilo1.css">
</head>
<body>


   
   
    

    <form class="form-login" method="POST" action="validar.php">

    
<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>UNACH<span>Repositorio</span></div>
		</div>
		<br>
		<div class="login">
            
        <input  type="text" name="correo" placeholder="Escribe tu correo" required/>
        <br/>
        <input  type="password" name="password" placeholder="Contraseña" required/>
        <button type="submit">Inicar Sesion</button>
        <br>
        <div class="contenedor_registrame">
          <a href="registro.php"  id="registrame">Registrarme</a>      
        </div>
        <div style="margin-top: 30px;"><?php 
          include_once 'partials/header.php';
      ?></div>
    </div>
		</div>
    <script src="./src/js/jquery.min.js"></script>
	<script src="./src/js/popper.js"></script>
	<script src="./src/js/bootstrap.min.js"></script>
	<script src="./src/js/main.js"></script>
  






</body>
</html>
