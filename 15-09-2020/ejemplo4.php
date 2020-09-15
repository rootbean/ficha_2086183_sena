<?php


/*
 Funciones - FOR - Arreglos
*/

// Imprimir los números

function imprimir_numeros($numeroInicial, $numeroFinal) {

    if ($numeroInicial < $numeroFinal) {
        for ($i = $numeroInicial; $i <= $numeroFinal; $i++) {
            echo $i;
            echo '<br>';
        }
    } else if ($numeroInicial > $numeroFinal) {
        for ($i = $numeroInicial; $i >= $numeroFinal; $i--) {
            echo $i;
            echo '<br>';
        }
    } else {
        echo 'Los números son iguales';
    }
}

imprimir_numeros(700, 700);


?>