<?php

$mi_arreglo = array(1,2,3,4,5,6);

$num_elementos = count($mi_arreglo);
echo $num_elementos."\n";

print_r($mi_arreglo);

array_push($mi_arreglo, 22,32,45);
print_r($mi_arreglo);

$ultimo_elemento = array_pop($mi_arreglo);
echo $ultimo_elemento;

// $primer_elemento = array_shift($mi_arreglo);
// echo $primer_elemento;

// array_unshift($mi_arreglo, "nuevo elemento2");
// echo $mi_arreglo;

// $porcion_arreglo = array_slice($mi_arreglo, $inicio, $longitud);

if (in_array(6, $mi_arreglo)) {
    // El valor existe
    echo("El valor existe \n");
}

// $arreglo2 = array("a", "b", "c");
// $nuevo_arreglo = array_merge($mi_arreglo, $arreglo2);