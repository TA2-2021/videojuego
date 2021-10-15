<?php

    include('login.php');

    class MenuPrincipal{

        public function listaUsuario(){
            try {
                //Crear objeto base de datos PDO
                $base = new PDO('mysql:host=locahost; dbname=untitlev1', 'root', '');
                $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //Sentencia
                $sql = 'SELECT nombre, estado FROM usuario';

                //Recorrer la Sentencia y guardarlo en RESULTADO
                foreach($base-> query($sql) as $resultado){
                    //Mostrar los resultados en pantalla
                    //! Esto deberia guardarse en ina lista de usuarios, es decir, en forma de bloque
                    //? Hay que pensar en el diseño de esa tabla y el como devolverlo en el Foreach
                    echo 'Nombre: '. $resultado['nombre'] .'<br>';
                    echo 'Estado: '. $resultado['estado'] .'<br>';
                }//Foreach
            } catch (Exception $e) {
                //emite una alerta en caso de error
                echo '<script lenguaje="javascript">alert("Error...:'. $e->getMessage() .'");</script>';
            }
        }//Funcion listaUsuario

    }//Clase MenuPrincipal
?>