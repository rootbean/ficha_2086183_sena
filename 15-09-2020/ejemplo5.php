<?php

/*
 - Nómina

 * Con los datos de los empleados, verificar si tiene derecho al aúxilio de
 transporte, teniendo en cuenta la legislación Colombiana.

 Nota: Imprimir los datos del empleado, salario básico y total a pagar

 - Salario Mínimo = $877.803
 - Aux de Transporte = $102.854
 - Un empleado tiene derecho al auxilio de transporte si gana dos salarios mínimos o menos. 
*/

$empleados = Array(2000000, 1500000, 890000, 1200000, 3000000);

$cantidad_empleados = count($empleados);
$salario_minimo = 877803;
$aux_transporte = 102854;

$salario_minimo_2 = $salario_minimo * 2;

for ($i = 0; $i < $cantidad_empleados; $i++) {

    $salario_empleado = $empleados[$i];
    $valor_aux_pagar = 0;
    $mensaje = '';

    if ($salario_empleado <= $salario_minimo_2) {
        $mensaje = 'Tiene derecho al aúxilio de transporte';
        $valor_aux_pagar = $aux_transporte;
    } else {
        $mensaje = 'No tiene derecho al aúxilio de transporte';
    }

    $total_pagar_empleado = $salario_empleado + $valor_aux_pagar;

    echo ' ----------------------------------------------------- '.'<br>';
    echo 'Salario empleado: $'.$salario_empleado.'<br>';
    echo 'Aúxilio de transporte: $'.$valor_aux_pagar.'<br>';
    echo 'Total pagar: $'.$total_pagar_empleado.'<br>';
    echo 'Nota: '.$mensaje.'<br>';

}


























?>