<?php 
$nombre = [
    "EVER",
    "LUZ",
     "MARTIN",
     "JHESSICA",
     "JUAN PAUL",
     "RODRIGO",
     "JUAN RONALDO",
     "CLAUDIA MARISOL",
     "BORIS",
     "YOLA",
     "ROSSE MARY"
];
//muestra elemento del vector
echo $nombre[7]."<br>";
//muestra la posicion del elemento del vector
$clave = array_search("CLAUDIA MARISOL", $nombre);
echo $clave;
//contar la cantidad de elemento del vector
echo "<br>LA CANTIDAD DE ESTUDIANTES ES: ".count($nombre);
?>
