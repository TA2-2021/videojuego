<?php

    $base = new mysqli ('localhost', 'root', '', 'untitlev1');

        if ($base->connect_errno){
            echo "<script>alert('ERROR AL CONECTAR')</script>";
            exit;
        }

        if (isset($_POST['usuario'])){
            $user = $_POST['usuario'];
            $clave = md5($_POST['clave']);

            if ($u == "" || $_POST['clave'] == null){
                echo "<script>alert('Error: Usuario y/o clave vacios!!');</script>";
            }else{
                $sql = "SELECT usuario, clave FROM usuario WHERE usuario = '$user' AND
                clave = '$clave' ";

                if (!$consulta = $base-> query($sql)){
                    echo "<script>alert('Usuario no encontrado!!');</script>";
                }else{
                    $row = mysqli_num_rows($consulta);

                    if ($row == 0){
                        echo "<script>alert('Usuario y/o clave incorrectos!!');</script>";
                    }else{
                        Header("Location:menu.php");
                    }
                }
            }
        }
        $base = null;
        $sql = null;
        $consulta = null;
        $row = null;

?>