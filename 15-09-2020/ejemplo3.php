<?php

/*
    Ciclos - FOR  - Arreglos
*/
            //      0        1         2         3             4          5
$numeros = Array('Juan', 'Daniela', 'Angie', 'Alejandro', 'Esneider', 'Jennifer', 'Ruber');

$cantidad_numeros = count($numeros);

for ($i = 0; $i < $cantidad_numeros; $i++) {
    
    // $i = 0    --- $numeros[0]   --- Juan
    // $i = 1    --- $numeros[1]   --- Daniela
    
    echo $numeros[$i];
    echo '<br>';
}






















?>