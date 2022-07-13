<?php 
session_start(); 
if (!isset($_SESSION['Id'])){
  header('Location: index.php');
}
require_once 'CSS/cdn.html';
require_once'PHP/Conexion.php';

$Info=$_SESSION['Id'];

$sql="SELECT * FROM novam WHERE Id='$Info'";
$resultado=$Conexion->query($sql);
$row=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novam</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/estilos.css">
  <style media="screen">
    embed{
      border: 2px solid black;
      margin-top: 30px;
    }
    .div1{
      margin-left: 170px;
    }
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
  </style>
</head>
<body>
  <center>  
    <header class="header">
      <br>
      <h1 id="captchaHeading" class="text-white">Manual de servicios</h1>
    </header>
    
  </center>

  <br>

  <div class="container">
    <a href="PHP/cerrar.php" class="boton_1 text-dark" style="z-index:; top: 35%;"><i class="fas fa-arrow-left"> Volver</i></a>

    <a href="pdf/<?php echo $row['Url']; ?>" id="btn" download="<?php $row['Url']; ?>" class="boton_1 text-dark" style=" border-radius: 50px; right: 10%; z-index:; top: 15%; position: fixed;">Descargar</a>

    <script type="text/javascript">
    </script>
    <script>$('#btn').click(function(){
      window.location.href = 'PHP/cerrar.php',1000;
    }).focusout (function(){
      window.location.href = 'PHP/cerrar.php',1000;
      return false;
    });
  </script>
</script>
</div>



<div>

  <center>
    <embed type="application/pdf" src="pdf/<?php echo $row['Url']; ?>" width="1500" height="570"></embed>
  </center>

</div>

</body>
</html>