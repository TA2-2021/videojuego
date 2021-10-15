<?php

    include('login.php');

    class MenuPrincipal{

        public function listaUsuario(){
            try {
                $base = new PDO('mysql:host=locahost; dbname=untitlev1', 'root', '');
                $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = 'SELECT nombre, estado FROM usuario';

                foreach($base-> query($sql) as $resultado){
                    echo 'Nombre: '. $resultado['nombre'] .'<br>';
                    echo 'Estado: '. $resultado['estado'] .'<br>';
                }//Foreach
            } catch (Exception $e) {
                echo '<script lenguaje="javascript">alert("Error...:'. $e->getMessage() .'");</script>';
            }
            

        }//Funcion listaUsuario

    }//Clase MenuPrincipal
?>