<?php 
session_start(); 
if (!isset($_SESSION['Id']) or empty($_SESSION['Id'])) 
	header('Location: index.php');
require_once 'CSS/cdn.html';
require_once'JS/funcion.js';
require_once'JS/captcha.js';
require_once'JS/ocultar.js';
require_once'JS/cerrar.js';
require_once'PHP/Conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verificación</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
		.boton_1{
			text-decoration: none;
			padding: 8px;
			padding-left: 15px;
			padding-right: 15px;
			font-weight: 300;
			color: white;
			background-color: #76FF03;
			border-radius: 15px;
			font-size: 15px;
		}
		.boton_1:hover{
			opacity: 0.6;
			text-decoration: none;
		}
		.boton_2{
			text-decoration: none;
			padding: 10px;
			padding-left: 20px;
			padding-right: 20px;
			font-weight: 300;
			background-color: #76FF03;
			border-radius: 15px;
		}
		.boton_2:hover{
			opacity: 0.6;
			text-decoration: none;
		}
	</style>
</head>
<body onload="setTimeout(ini, 20000);" onkeypress="setTimeout(parar, 20000);" onclick="setTimeout(parar, 20000);">

	<br><br>

	<center>	
		<header class="header">
			<br>
			<h1 id="captchaHeading" class="text-white">Validar Captcha</h1>
		</header>
		
	</center>

	<br>

	<div class="container">
		<a href="PHP/cerrar.php" class="boton_1 text-dark" style="z-index:; top: 35%;"><i class="fas fa-arrow-left"> Volver</i></a>
	</div>

	<br><br><br>
	<center>
		<div class="row container">


			<div class="col-12">

				<h1><i class="fas fa-robot">  No soy un robot </i></h1><hr>

				<form onsubmit="return recaptcha(campo1.value);" action="viewpdf.php" method="post">

					<span id="recaptcha" class="text-white" style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8eMr8_k5a8Q_hBT4RRHxxb6CtYQYWs4jvxb9ZS4DydLAlvoBfTVXMAMpjpsjxXkCuLFQ&usqp=CAU); font-size: 25px; font-family: sans-serif;"><?php echo rand() ?></span>
					<br>

					<input name="campo1" type="number" placeholder="Igresa el captcha" id="reco" class="input">
					<br><br>

					<div id="secs" style="font-size: 80px; font-family: impact;"></div>

				</form>
			</div>


		</div>
	</center>

</body>
</html>