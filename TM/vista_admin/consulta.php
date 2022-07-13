<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require_once'../PHP/Conexion.php';
require_once'../CSS/cdn.html';

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM novam ORDER BY Id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['novam']))
{
	$q=$Conexion->real_escape_string($_POST['novam']);
	$query="SELECT * FROM novam WHERE 
	Marca LIKE '%".$q."%' OR
	Modelo LIKE '%".$q."%' OR
	Linea LIKE '%".$q."%'";
}

$BuscarManual=$Conexion->query($query);
if ($BuscarManual->num_rows > 0)
{
	$tabla.= 
	'<div class="container"><table border="1" class="table table-dark table-striped">
	<thead>
	<tr>
	<th>Marca</th>
	<th>Linea</th>
	<th>Modelo</th>
	<th>Imagen</th>
	<th>Manual</th>
	</tr>
	</thead>';

	while($FilaManuales= $BuscarManual->fetch_assoc())
	{
		$tabla.=
		'<tr>
		<td>'.$FilaManuales['Marca'].'</td>
		<td>'.$FilaManuales['Linea'].'</td>
		<td>'.$FilaManuales['Modelo'].'</td>
		<td>' .
		'<img src = "../image/' .  $FilaManuales['Imagen'] . '" width = "60px" height = "50px"/></td>
		<td>" <td><a href="../PHP/borrar.php?Id="'.$FilaManuales['Id'].'"> <button type="button" class="btn btn-danger">Eliminar</button> </a></td>";</td>
		</tr>
		';
	}

	$tabla.='</table></div>';
} else
{
	$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
}


echo $tabla;
?>
