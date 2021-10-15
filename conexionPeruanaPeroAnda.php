<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $usuario = $_POST['usuario'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $conexion=mysqli_connect('localhost','root','') or die("Error!");
            mysqli_select_db($conexion,"untitle") or die("Problemas de detección!");
            if (substr_count($mail, '@') == 1){

            
            if(empty($nombre) OR empty($apellido) OR empty($usuario) OR empty($mail) OR empty($pass)){
              echo 'Error, un campo está incompleto!';
              echo '<br><br><a href="..\registrarse.php">Volver</a>';
            } else {
            $sql = mysqli_query($conexion, "INSERT INTO usuario VALUES (id_usuario,'$usuario','$pass',false,0)");
            $sqlP = mysqli_query($conexion, "INSERT INTO persona VALUES (id_persona, '$nombre','$apellido','$mail')");
            header('Location: http://localhost/videojuego/menu.php');
          }
        } else {
          echo 'Pusiste mal el arroba bro';
          echo '<br><br><a href="..\registrarse.php">Volver</a>';
        }
?>