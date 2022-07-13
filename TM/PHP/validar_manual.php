<?php 
require_once'Conexion.php';

if (isset($_POST['Registrar'])) {

	else{
		$Id =null;
		$Marca = $_POST['Marca'];
		$Linea = $_POST['Linea'];
		$Modelo = $_POST['Modelo'];

		$Imagen=$_FILES['Imagen']['name'];
		$pdf_type=$_FILES['Imagen']['type'];
		$pdf_size=$_FILES['Imagen']['size'];
		$pdf_tem_loc=$_FILES['Imagen']['tmp_name'];
		$pdf_store="../image/".$Imagen;

		move_uploaded_file($pdf_tem_loc,$pdf_store);


		$Url=$_FILES['Url']['name'];
		$pdf_type=$_FILES['Url']['type'];
		$pdf_size=$_FILES['Url']['size'];
		$pdf_tem_loc=$_FILES['Url']['tmp_name'];
		$pdf_store="../pdf/".$Url;

		move_uploaded_file($pdf_tem_loc,$pdf_store);

		$query= "INSERT INTO novam (Id, Imagen, Marca, Modelo, Linea, Url) VALUES ('$Id', '$Imagen', '$Marca', '$Modelo', '$Linea', '$Url')";
		$Resultado = $Conexion->query($query);

		if ($Resultado) {

			header("refresh:.5;url=../index.php");
			echo'<script type="text/javascript">
			alert("Datos registrados con exito! :D");
			</script>';
		} else  {
			header("refresh:0.1;url=../Registrar_Manual.php");
			echo'<script type="text/javascript">
			alert("No se pudo registro ningun dato con exito!");
			</script>';
		}

	} 

}
?>