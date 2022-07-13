<?php

if(isset($_POST["Validar"])) {

    require("Conexion.php");

    $Id = $_POST["Id"];

    $consulta = "SELECT * FROM novam WHERE Id='$Id'";



    if(isset($Id)) {

        if($Id == $Id) {

            session_start();
            $_SESSION["Id"] = $Id;
            header("Location: ../captcha.php");

        }
        else {
            Header("Location: index.php?error=login");
        }

    }

} else {
    header("Location: index.php");
}

?>