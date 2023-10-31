<?php

//require('./src/config/conexion.php');
?>

<!doctype html>
<html lang="es-MX">

<head>
	<title>Menú Principal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="src/css/bootstrap.min.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Menú Principal</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">


					<div class="logoimagen">
						<img src="./src/images/bg-1.png" alt="logo">
					</div>

					<div class="wrap d-md-flex">

						<!--<div class="img" style="background-image: url(./src/images/bg-1.png);">
			      		</div>-->
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Iniciar sesión</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="#" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="name">Bienvenido: </label>
									<?php echo $_SESSION["usuario"]; ?>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Contraseña</label>
									<input type="password" class="form-control" placeholder="Contraseña" required>
								</div>
							</form>
							<p class="text-center">¿No te has regitrado? <a data-toggle="tab" href="#signup">Registrarse</a></p>
						</div>
						<a href="salir.php">Cerrar Sesión</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="./src/js/jquery.min.js"></script>
	<script src="./src/js/popper.js"></script>
	<script src="./src/js/bootstrap.min.js"></script>
	<script src="./src/js/main.js"></script>

</body>

</html>