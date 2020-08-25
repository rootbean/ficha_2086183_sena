<?php

/*
Precio de venta = costo de producción + 45 % de costo de producción.
*/

$costo_produccion = 2000;
$porcentaje_costo_produccion = $costo_produccion * 0.45;
$precio_venta = $costo_produccion + $porcentaje_costo_produccion;

$precio_venta2 = $costo_produccion * 1.45;


echo 'El precio de venta es: '.$precio_venta;
echo '<br>';
echo ' El precio de venta 2 es: '.$precio_venta2;


?>