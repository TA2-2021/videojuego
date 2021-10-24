<?php

    $base = new mysqli('localhost', 'root', '', 'untitlev1');

    if ($base->connect_errno){
        echo "<script>alert('ERROR AL CONECTAR!!');</script>";
        exit;
    }

    if (!isset($_POST['usuario'])){
        $user = $_POST['usuario'];
        $clave = md5($_POST['clave']);

        if ($user == "" || $_POST['clave'] == null){
            echo "<script>alert('Usuario y/o clave vacios!!');</script>";
        }else{
            $sql = "SELECT nombre FROM usuario WHERE nombre = '$user')";

            if(!$consulta = $base->query($sql)){
                $sql = "INSERT INTO usuario (id_usuario, nombre, clave, oro, estado) VALUES 
            (id_usuario, '$user', '$clave', 0, TRUE)";

                if(!$consulta = $base->query($sql)){
                    echo "<script>alert('ERROR! NO SE PUDO INGRESAR EL USUARIO');</script>";
                }else{
                    $row = mysqli_num_rows($consulta);

                    if($row == 0){
                        echo "<script>alert('ERROR! NO SE PUDO INGRESAR EL USUARIO, 0 FILAS');</script>";
                    }else{
                        header('Location: index.php');
                    }
                }

            }else{
                echo "<script>alert('Usuario ya existente');</scrip>";
            }

            
        }
    }
        $base = null;
        $sql = null;
        $consulta = null;
        $row = null;
?>