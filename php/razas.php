<?php
class personaje{
    public $nivel;
    public $nombre;
    public function __construct($nivel, $nombre){
        $this->nivel = $nivel;
        $this->nombre = $nombre;
    }
}
class Raza extends Personaje{
    public $vida;
    public $agilidad;
    public $fuerza;
    public $defensa;
    public $pasiva;
    public function __construct($nivel, $nombre, $vida, $agilidad, $fuerza, $defensa, $pasiva){
        parent:: __construct($nivel, $nombre, $vida, $agilidad, $fuerza, $defensa, $pasiva);
        $this->vida = $vida;
        $this->agilidad = $agilidad;
        $this->fuerza = $fuerza;
        $this->defensa = $defensa;
        $this->pasiva = $pasiva;
    }
}
?>