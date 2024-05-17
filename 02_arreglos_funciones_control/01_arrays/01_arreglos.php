<?php

// $edades = [20, 18, 29, 32];

var_dump($edades);

// ---- Sintaxis apara acceder a los subindices por notacion de corchetes

echo "Una de las edades dentro del array es : $edades[1] \n";

// --- aRREGLOS ASOCIATIVOS

$edades = array(
    "Jesus" => 29,
    "Martha" => 28,
    "Anahi" => 8,
);

echo "La edad de Jesus es:" . $edades["Jesus"] . "\n";

// --- ACCEDIENDO A ARRAYS ASCIATIVOS E INTERPOLANDO EN STRING

echo "La edad de jesus es: {$edades['Jesus']} \n";
echo "La edad de Martha es: {$edades['Martha']} \n";


// ---- ARREGLOS MULTIDIMENSIONALES

$personas = array (
    "Jesus" => array(
        "edad" => 29,
        "ciudad" => "GDL",
    ),
    "Martha" => array(
        "edad" => 28,
        "ciudad" => "GDL",
    ),
    "Adrian" => array(
        "edad" => 19,
        "ciudad" => "OAX",
    ),
);

// --- Accediendo a cada valor con llaves interpoladas

echo "La edad de Jesus es: {$personas['Jesus']['edad']} \n";
echo "La edad de Adrian es: {$personas['Adrian']['edad']} \n";



// Recorriendo arreglos

foreach ($personas as $nombre => $datos){
    echo "Nombre: $nombre \n";
    echo "\n";

    foreach ($datos as $clave => $valor){
        echo "$clave: $valor \n";
    }
    echo "\n";
}
