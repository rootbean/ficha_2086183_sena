<?php

/*
¿Qué es una función ?
*/

// Hallar hipotenusa

// $cateto1 = 4;
// $cateto2 = 6;


// $hipotenusa = sqrt($cateto1 * $cateto1 + $cateto2 * $cateto2); 
// $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));


function hallarHipotenusa1($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    echo 'La hipotenusa es: '.$hipotenusa;
    echo '<br>';
}

hallarHipotenusa1(2, 4);
hallarHipotenusa1(4, 6);


function hallarHipotenusa2($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    return $hipotenusa;
}


$hipotenusa2 = hallarHipotenusa2(2, 4);

echo 'El valor de la hipotenusa 2 es: '.$hipotenusa2;

?>