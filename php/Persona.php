<?php

    Class Persona{
        protected $nombre;
        protected $apellido;
        protected $correo;

        public function __construct ($nombre, $apellido, $correo){
            $this-> nombre = $nombre;
            $this-> apellido = $apellido;
            $this-> correo = $correo;
        }
    }
?>