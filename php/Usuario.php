<?php

    Class Usuario {
        protected $nombreUsuario;
        protected $clave;
        protected $estado;
        protected $oro;


        public function __construct ($nombreU, $clave){
            $this-> nombreUsuario = $nombreU;
            $this-> clave = $clave;
            $this-> estado = True;
            $this-> oro = 0;
        }//*Fin Constructor
    }
?>