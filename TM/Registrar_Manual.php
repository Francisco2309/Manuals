<?php
session_start();
require 'PHP/Conexion.php';
require 'CSS/cdn.html';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Novam</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="CSS/style.css">
	<style type="text/css">
		.boton_1{
			text-decoration: none;
			padding: 10px;
			padding-left: 20px;
			padding-right: 20px;
			font-weight: 300;
			color: dark;
			background-color: #76FF03;
			border-radius: 15px;
			font-size: 15px;
		}
		.boton_1:hover{
			opacity: 0.6;
			text-decoration: none;
		}
	</style>
</head>
<body>


	<center>


		<header class="header">

			<br>
			<h1 class="text-white">Agrega un manual de Servicios</h1>
			<br>

		</header>

	</center>
	<br>
	<div class="container">
		<a href="index.php" class="boton_1 text-dark" style="z-index:; top: 30%;"><i class="fas fa-arrow-left"> Volver</i></a>
	</div>

	<center>


		<div class="container">
			<div class="w-75 p-4">

				<!-- Aqui empieza el Formulario -->

				<form method="post" enctype="multipart/form-data" action="PHP/validar_manual.php">

					<div class="col-12">


						<span>Seleccionar una imagen</span>
						<input type="file" accept="image/png, image/jpeg" name="Imagen" class="form-control"  id="Imagen" lang="es" >

					</div>

					<div class="col-12">
						<label  for="Modelo">Marca</label>
						<input class="form-control" type="text" name="Marca" id="Marca">

					</div>

					<div class="col-12">


						<label for="Modelo">Modelo</label>
						<input class="form-control" type="number" name="Modelo" id="Modelo" oninput="if( this.value.length > 4 )  this.value = this.value.slice(0,4)">
					</div>  


					<br>
					

					<br>
					<div class="col-12">
						<label  for="Linea">Linea</label>
						<input class="form-control" type="text" name="Linea" id="Linea">

					</div>

					<br>
					<div class="col-12">

						<span>Adjuntar archivo PDF</span>
						<input type="file" accept=".pdf" name="Url" class="form-control"  id="Url" lang="es" size="30">

					</div>

					<br><br>


					<br><hr>
					<button type="submit" class="boton_1" name="Registrar"><i class="fas fa-car-side"></i> Registrar</button>


				</form>

				<!-- Aquí termina el Formulario -->

			</div>

		</div>
	</center>


</body>
</html>