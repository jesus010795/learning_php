<?php
$comida = array('frutas' => array('naranja', 'plátano', 'manzana'),
                'verduras' => array('zanahoria', 'col', 'guisante'));

// Cuenta recursiva
echo count($comida, COUNT_RECURSIVE)."\n"; // muestra 8

// Almacenadno en una variable el total de elementos
$totalelementos = count($comida, COUNT_RECURSIVE);
echo $totalelementos."\n";

// Cuenta normal
echo count($comida) . "\n"; // muestra 2

// -----  Ejemplo con arreglo unidimensional

$mi_arreglo = [1,2,3,4,5,6];
$total_numeros = count($mi_arreglo);
echo count($mi_arreglo)."\n";
echo $total_numeros."\n";


?>