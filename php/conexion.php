<?php
    $conexion = mysqli_connect("Localhost", "root", "", "untitlev1");

        if($conexion->connect_error){
            die("Error de conexion". $conexion->connect_error);
        }
?>