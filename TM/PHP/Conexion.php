<?php 

$Conexion= new Mysqli("localhost", "root", "", "tm");

if (mysqli_connect_errno()) {
echo "Este sitio esta presentando problemas";
}

?>