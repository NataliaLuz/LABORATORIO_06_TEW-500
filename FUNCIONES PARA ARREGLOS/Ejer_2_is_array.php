<?php
//is_array — Comprueba si una variable es un array

$si = array('esto', 'es', 'un array');

echo is_array($si) ? 'Array' : 'No es un array';
echo "\n";

$no = 'esto es un string';

echo is_array($no) ? 'Array' : 'No es un array';
?>