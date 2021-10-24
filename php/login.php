<?php
    require('conexion.php');

    if (isset($_POST['aceptar'])?$_POST['aceptar']:null){
        $usuario = $_POST['user'];
        $clave = $_POST['pass'];

        $sql = "SELECT nombre, clave FROM usuario WHERE nombre = '$usuario' AND clave = '$clave'";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado)) {
            while ($row = mysqli_fetch_array($resultado)) {
                $user = $row['user'];
                $pass = $row['pass'];
            }
            session_start();
            $_SESSION['nombre'] = $user;
            $_SESSION['clave'] = $pass;

            header("Location: ../menu.php");
        }else{
            echo "<script>alert('No hay registro');</script>";
        }
    }else{
        echo "<script>alert('ERROR!! USUARIO Y/O CLAVE INCORRECTO');</script>";
    }
    

?>