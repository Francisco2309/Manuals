<?php
	EliminarProducto($_GET['Id']);

	function EliminarProducto($Id)
	{
		include 'Conexion.php';
		$sentencia="DELETE FROM novam WHERE Id='".$Id."' ";
		$Conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($Conexion));

	}
?>

<script type="text/javascript">
	alert("Producto Eliminado!!");
	window.location.href='../vista_admin/busqueda.html';
</script>