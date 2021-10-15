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
                $base = new PDO('mysql:host = localhost; dbname untitlev1', 'root', '');
                $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $sql = 'INSERT INTO usuario VALUE (0, :nombre, :clave, 0, 0)';
                    $resultado = $base->prepare($sql);
                    $resultado->execute(array(':nombre' => $nombreUsuario, ':clave' => $claveUsuario));

                    $resultado->closeCursor();
                
            } catch (Exception $e) {
                echo 'Error al registrar ... <br> Error: '. $e->getMessage();
            }//TryCatch
        }else
            echo 'Usuario ya existente...';
        }//Funcion Registrar
        
        public function verificarUsuario ($nombreU){
            $base = new PDO('mysql:host = localhost; dbname untitlev1', 'root', '');
            $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'SELECT nombre FROM usuario WHERE nombre = ?';
            $resultado = $base-> prepare($sql);
            if($resultado-> execute(Array($nombreU))){
                return false;
            }else
                return true;
        }
    
    }//Clase Login
?>