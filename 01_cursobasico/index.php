<?php

echo"Funcion para imprimir cualquier cosa \n";

$nombre = "Jesus";
$apellido = "Cruz";


print "Yo me llamo " . $nombre . " " . $apellido . "\n";



//Var_dump
$persona = array(
    "nombre" => "Juan", 
    "edad" => 30, 
    "ciudad" => "Madrid"
);

var_dump( $persona );

print_r($persona);

// ------- OPERADORES LOGICOS

// Suponiendo estas variables
$es_un_gato_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado?
var_dump($es_un_gato_grande && $le_gusta_comer); // true
var_dump($es_un_gato_grande || $sabe_volar); // true
var_dump( $sabe_volar || $tiene_2_patas ); // false
var_dump( !$le_gusta_comer ); // false
var_dump( !$le_gusta_comer || $es_un_gato_grande); // true


$a = 2;

$a++;
echo "$a \n";

echo 5 + "5 michis \n";