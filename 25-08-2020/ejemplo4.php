<?php
 /*
 1. Un teatro de cine requiere una solución para la reserva de boletería, 
 los datos que se deben tener en cuenta son: nombres y apellidos, dirección de domicilio, 
 teléfono, número documento de identidad, edad y el dinero que tiene disponible para ver la película, 
 así mismo la película que desea ver (Rambo, Depredador, El cazador de brujas, La red), 
 si es Rambo el costo de la boleta es de $5.000, Depredador $7.000, 
 El cazador de brujas $9.000 y La red $12.000; para el ingreso a las películas rambo y depredador la edad mínima es de 14 años, 
 para El cazador de brujas 18 años  y para la red mayor de 20 años. 
 Debe imprimir toda la información ingresada por el cliente, 
 si el cliente ingreso una cantidad mayor al costo de la película debe mostrar cuanto le queda de cambio y cuál fue el valor que ingresó.
 */

// Manera 1

$nombre_cliente = 'Juanito';
$apellido_cliente = 'Rodríguez';
$direccion_domicilio_cliente = 'Calle 7 # 6 - 18';
$telefono_cliente = '3175678990';
$numero_documento_cliente = '1117456780';
$edad_cliente = 15;
$presupuesto_cliente = 50000;
$pelicula_seleccionada = 'Rambo'; // Variable que se debe modificar para las pruebas
$valor_pagar_cliente = 0;
$valor_cambio_cliente = 0;
$cumple_requisitos = false;

// Validar la película seleccionada
if ($pelicula_seleccionada == 'Rambo') {
    if ($edad_cliente >= 14) {
        echo '<br>';
        echo 'Puede ver la película Rambo';
        $valor_pagar_cliente = 5000;
        $cumple_requisitos = true;
    } else {
        echo '<br>';
        echo 'No puede ver la película Rambo, debe seleccionar otra.';
    }
    
} else if ($pelicula_seleccionada == 'Depredador') {
    if ($edad_cliente >= 14) {
        echo '<br>';
        echo 'Puede ver la película Depredador';
        $valor_pagar_cliente = 7000;
        $cumple_requisitos = true;
    } else {
        echo '<br>';
        echo 'No puede ver la película Depredador, debe seleccionar otra.';
    }
} else if ($pelicula_seleccionada == 'El cazador de brujas') {
    if ($edad_cliente >= 18) {
        echo '<br>';
        echo 'Puede ver la película El cazador de brujas';
        $valor_pagar_cliente = 9000;
        $cumple_requisitos = true;
    } else {
        echo '<br>';
        echo 'No puede ver la película El cazador de brujas, debe seleccionar otra.';
    }
} else if ($pelicula_seleccionada == 'La red') {
    if ($edad_cliente > 20) {
        echo '<br>';
        echo 'Puede ver la película La red';
        $valor_pagar_cliente = 12000;
        $cumple_requisitos = true;
    } else {
        echo '<br>';
        echo 'No puede ver la película La red, debe seleccionar otra.';
    }
    
} else {
    echo '<br>';
    echo 'La película seleccionada no se encuentra en cartelera';
}

if ($presupuesto_cliente > $valor_pagar_cliente) {
    $valor_cambio_cliente = $presupuesto_cliente - $valor_pagar_cliente;
} else {
    echo '<br>';
    echo 'El dinero no le alcanza ajajaj';
}


if ($cumple_requisitos) {
    echo '<br>';
    echo 'Nombre cliente: '.$nombre_cliente;
    echo '<br>';
    echo 'Apellido cliente: '.$apellido_cliente;
    echo '<br>';
    echo 'Presupueso cliente: $'.$presupuesto_cliente;
    echo '<br>';
    echo 'El valor a pagar es: $'.$valor_pagar_cliente;
    echo '<br>';
    echo 'Cambio: $'.$valor_cambio_cliente;
}




?>