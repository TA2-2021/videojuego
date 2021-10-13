<?php
    //!CONSTANTES
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_USUARIO', 'root');
    DEFINE ('DB_CLAVE', 'root');
    DEFINE ('DB_NOMBRE', 'untitle');

    
    
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
            $sql = 'INSERT INTO usuario VALUES("'. $nombre.'","'. $clave.'","'. $estado.'","'. $oro.'")';
            
            if ($this-> verificar_nombre($nombre)){
                if (mysqli_query($this-> conexion, $sql)){
                    echo 'Se ha ingresado correctamente';
                }else
                echo 'Error al ingresar';
            }
                $this-> close();
        }//Funcion registrar


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

            if (mysqli_query($this-> conexion, $sql)){
                echo 'Mostrar los usuarios en la lista lateral derecha conectados';
            }else
                echo 'Mostrar los usuarios en la lista lateral derecha desconectados';
        }//Funcion mostrarUsuarios
    }//Clase
?>