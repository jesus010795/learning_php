<?php

function suma($a, $b, $c) {
    return $a + $b + $c;
}

$valores = [1, 2, 3];

echo suma(...$valores) . "\n"; 

// DEFINIENDO FUNCION QUE RECIBE COMO PARAMETRO UNPACKING ARRAY

function sum (...$array) {
    $res = 0;

    foreach($array as $elemento){
        $res += $elemento;
    }

    return $res;

}

// sum($numeros);
echo sum(1,2,3,4,5,6) . "\n";
echo sum(2,3,4,5,6,). "\n";



// Funcion similar pero recibe como argumento un array

$numeros = [1,2,3,4,5,6,7,8];

function sumaArray ($array) {
    $res = 0;

    foreach($array as $elemento){
        $res += $elemento;
    }

    return $res;
    
}

// Si intento aplicar esta sintaxis con la primera funcion, no ejecutara la suma
echo sumaArray($numeros) . "\n";
echo sumaArray(range(2,22)) . "\n";

?>