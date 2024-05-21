<?php
/**
 * 
 * En una tienda de ropa hay descuento del 35% en todos sus productos 
 * debes realizar una función que reciba el valor de cada producto y le reste el 35% 
 * para mostrar luego su valor original y en cuánto queda su nuevo valor a pagar.
 * 
 *  */

$prductos = array();



function realizar_descuento($precio){
    $precion_con_descuento = ($precio - ($precio*.35));
    return $precion_con_descuento;
}

echo realizar_descuento(100);


?>