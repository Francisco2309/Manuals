<script type="text/javascript">
function recaptcha(cadena){

	var numero_mostrado=$('#recaptcha').text();
	var numero_escrito=cadena;

	if (numero_mostrado==numero_escrito){
		return true;
	}
	else {
		Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: 'Captcha incorrecto',
			showConfirmButton: false,
			timer: 1200
		})
		setTimeout(function() {
			window.location = 'index.php';
		}, 1200);
		return false;
	}
}
</script>