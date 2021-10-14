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
    
    class Conexion{
        protected $conexion;
        protected $sql;


        public function open(){
            $this-> conexion = new mysqli(DB_HOST, DB_USUARIO, DB_CLAVE, DB_NOMBRE);

            if ($this-> conexion-> connect_errno){
                die('Conexion fallida: '. $this-> conexion-> connect_error);
                return;
            }
        }//Funcion OPEN

        public function close(){
            
            if ($this-> conexion-> connection_status){
                $this-> conexion -> close();
                return;
            }else
                echo 'Error al desconectar...'. $this-> conexion-> connect_error;

        }//Funcion CLOSE

        //Funcion insertar con dos funciones para diferente tabla
       // public function insertar(){
            //insertar_persona();
            //registrar();
        //}

        //insertar persona
        public function insertar_persona($nombre){
            $sql = 'INSERT INTO persona VALUES("'. $nombreP.'","'. $apellido.'","'. $correo.'")';
            
            if ($this-> verificar_nombre($nombre)){
                if (mysqli_query($this-> conexion, $sql)){
                    echo 'Se ha ingresado correctamente';
                }else
                echo 'Error al ingresar';
                
                return;
            }
                $this-> close();

        }///termina 

        public function verificar_nombre($nombre){
            $sql = 'SELECT * FROM usuario WHERE nombre = "' .$nombre. '";';

            if (mysqli_query($this-> conexion, $sql)){
                echo 'Nombre de usuario ya existente';
                return true;
            }else{
                echo 'Creado correctamente';
                return false;
            }//Else
            return false;
            $this-> close();
        }//Verificar_nombre

        //!Insert que se ejucara cuando se Crea el Obj usuario por primera vez
        public function registrar($nombre, $clave, $estado, $oro){
            $this-> open();
            $sql = $mysqli_query($this-> conexion, 'INSERT INTO usuario VALUES(0,'.$nombre.','.$pass.','.$estado.','.$oro.')');
            echo "sukini";
            
            if ($this-> verificar_nombre($nombre)){
                if (mysqli_query($this-> conexion, $sql)){
                    echo 'Se ha ingresado correctamente';
                }else
                echo 'Error al ingresar';
            }
                $this-> close();
        }//Funcion registrar

      // registrar($nombre, $pass, $estado, $oro);

        //Ingresar/Logearse
        public function ingresar($nombre, $clave){
            $sql = 'SELECT * FROM usuario WHERE nombre = "'. $nombre .'" AND clave = "'. $clave .'";';

            if (mysqli_query($this-> conexion, $sql)){
                header('Location: menu.php');
            }else
                echo 'Usuario y/o clave incorrecta';
        }//funcion Ingresar

        public function mostrarUsuarios(){
            $sql = 'SELECT nombre, estado FROM usuario;';
        }
    }//Clase
?>