<?php
/*
* Este es un array con algunos datos que se quieren modificar
* cuando se recorra el bucle for.
*/
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0; $i < count($people); ++$i) {
    echo $people[$i]['salt'] . "\n";
}

$multidimensionalArray = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

for($i = 0; $i < count($multidimensionalArray); ++$i){

    $num_elemento = count($multidimensionalArray[$i]);
    // echo $num_elemento. "\n";

    for ($j = 0; $j < $num_elemento; $j++) {
        // Acceder al elemento actual e imprimirlo
        echo $multidimensionalArray[$i][$j] . " ";
    }

    echo "\n";
}
// var_dump($multidimensionalArray[0]);
// echo count($multidimensionalArray) . "\n";

// ---------- Recorriendo otro arreglo

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

// Obtenemos las claves del array personas
$keys = array_keys($personas); 


for ($i= 0; $i < count($keys); $i++) {
    
    //Almacenams el nombre de cada elemento
    // echo "Nombre: \n";
    $nombre = $keys[$i]; 
    // var_dump($nombre);

    //Accedemos a los datos dentro del array 
    // echo "Datos: \n";
    $datos = $personas[$nombre];
    // var_dump($datos);

    echo "$nombre \n";
    
    $dataKeys = array_keys($datos);
    // echo "DATA KEYS \n";
    // var_dump($dataKeys);

    for ($j = 0; $j < count($dataKeys); $j++) { 
        $clave = $dataKeys[$j]; // Obtenemos la clave del dato
        $valor = $datos[$clave]; // Obtenemos el valor del dato

        echo "$clave : $valor \n";
    }
    echo"\n";
}




?>