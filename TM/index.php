<?php 
session_start();
require_once'CSS/cdn.html';
require_once'PHP/Conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Novam</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/estilos.css">
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
<body>


	<center>
		<header class="header">

			<br>

			<h1 class="text-white">Manuales de Servicios</h1>

			<br><br>

		</header>
	</center>

	<br><br>

	<div class="container">
		<a href="Buscar/busqueda.html" class="boton_2 text-dark" style="z-index:; top: 30%;"><i class="fas fa-search">  Buscar</i></a>
	</div>
	
	
	<br>


	<div class="container">
		<div class="row row-cols-1 row-cols-md-5 g-4">
			<?php 

			$query = "SELECT * FROM novam";

			if ($result = $Conexion->query($query)) {

				/* fetch associative array */
				while ($row = $result->fetch_assoc()) {
					?>

					<div class="card">

						<img width="227px" height="150px" src="image/<?php echo $row['Imagen'] ?>">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['Marca'] ;?></h5>
							<p class="card-text"><?php echo $row['Linea']; ?></p>
							<h5 class="card-text"><?php echo $row['Modelo']; ?></h5>

							<form method='POST' action="PHP/session.php">
								<input type='hidden'  name='Id' value="<?php echo $row['Id']; ?>">
								<center><button name='Validar' class='text-dark boton_1'><i class="fas fa-download"> Descargar</i></button></center>
							</form>

						</div>

					</div>

					<?php

				}

				/* free result set */
				$result->free();
			}
			?>
		</div>
	</div>







</body>
</html>