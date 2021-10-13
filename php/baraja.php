<?php
  function mostrarBaraja(){

  $baraja = [
    1 => "Carta 1: Defensa +5".'<br>',
    2 => "Carta 2: Fuerza +5".'<br>',
    3 => "Carta 3: Vida +15".'<br>',
    4 => "Carta 4: Agilidad +4".'<br>',
    5 => "Carta 5: Fuerza +3 y Agilidad +3".'<br>',
    6 => "Carta 6: Vida +10 y Defensa +3".'<br>',
    7 => "Carta 7: Vida +10 y Agilidad +3".'<br>',
    8 => "Carta 8: Esta carta tiene un solo uso y desbloqueará la pasiva del personaje que selecciones en el turno en el que la usas".'<br>'
];
return print_r($baraja);
}
?>