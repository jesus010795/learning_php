<?php

$precios_cafe = [12,22,16,25, 13];

function ordernar_numeros($a, $b){
    return $a <=> $b;
}

usort($precios_cafe, 'ordernar_numeros');

print_r($precios_cafe);