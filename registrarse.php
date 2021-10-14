<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body>
    <section class="inicio">

        <div class="perga">
            <img src="css/img/fondop.png">

                <form style="margin-top: -72%;" method="post" action="php/conexion.php" class="form" id="">
                    <h1>Registrarse</h1>
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="text" name="mail" placeholder="Mail">
                    <input type="text" name="pass" placeholder="Contraseña">
                    
                    <input type="submit" name="" value="Aceptar" id="btnEnviar" onclick="registrar()">
                    <a href="index.php">Volver</a>

                </form>
        </div>

    </section>
    
</body>
</html>