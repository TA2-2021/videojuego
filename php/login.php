<?php  
    //!CONSTANTES
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_USUARIO', 'root');
    DEFINE ('DB_CLAVE', 'root');
    DEFINE ('DB_NOMBRE', 'untitle');

    $nombreP=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $nombre=$_POST['usuario'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $estado = false;
    $oro = 0;
    class Login {
    

        public function registrar_usuario ($nombreUsuario, $claveUsuario){

        if($this->verificarUsuario($nombreUsuario)){
            try {
                //crear objeto de base de datos PDO
                $base = new PDO('mysql:host = localhost; dbname untitlev1', 'root', '');
                $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //Sentencia
                    $sql = 'INSERT INTO usuario VALUE (0, :nombre, :clave, 0, 0)';

                    //Preparar objeto RESULTADO para absorver el resultado de la sentencia
                    $resultado = $base->prepare($sql);

                    //Ejecutar sentencia
                    //!Los "marcadores" :nombre y :clave funcionan como parametros dentro de la sentencia sql, nos referimos a ellos con ':nombre_marcador'
                    //!Seguido de => para dirigir a que valor estamos refiriendo
                    $resultado->execute(array(':nombre' => $nombreUsuario, ':clave' => $claveUsuario));

                    //Cerrar sentencia
                    $resultado->closeCursor();
                
            } catch (Exception $e) {
                //emitir alerta en caso de error
                echo '<script lenguaje="javascript">alert("Error...:'. $e->getMessage() .'");</script>';
            }//TryCatch
        }else
            echo 'Usuario ya existente...';
        }//Funcion Registrar
        
        public function verificarUsuario ($nombreU){
            //crear objeto de base de datos PDO
            $base = new PDO('mysql:host = localhost; dbname untitlev1', 'root', '');
            $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Sentencia
            $sql = 'SELECT nombre FROM usuario WHERE nombre = ?';
            //Preparar onjeto RESULTADO para emitir el resultado de la sentencia
            $resultado = $base-> prepare($sql);
            //la funcion Execute retorna BOOLEANO, por ende, si existe sera false, y sino true y que registre el usuario
            if($resultado-> execute(Array($nombreU))){
                return false;
            }else
                return true;
        }


    
    }//Clase Login
?>