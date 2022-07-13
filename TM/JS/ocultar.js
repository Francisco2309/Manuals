<script type="text/javascript">
var secondsRemaining = 20;

function updateTime() {
	$("#secs").text(secondsRemaining);
}

updateTime();

var i = setInterval(function() {
	secondsRemaining -= 1;
	if (secondsRemaining > 0){
		updateTime();
	} else {
		clearInterval(i);
		$("#secs").html("<button type='submit' class='boton_1 text-dark button' id='btn'><i class='fas fa-check'>Descargar</i></button>")
	}
}, 1000);

$("#secs").on("click", "#myButton", function(){
});  
</script>