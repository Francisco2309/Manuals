	<script type="text/javascript">
		var pepe;
		function ini() {
			pepe = setInterval('location="PHP/cerrar.php"',5000);
		}   
		function parar() {
			clearTimeout(pepe);
			pepe = setInterval('location="PHP/cerrar.php"',5000);
		}
		</script>