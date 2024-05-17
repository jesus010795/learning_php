<?php

$palabras = array("sol", "luna", "cielo");
$cantidad_palabras = count($palabras);

for ($i=0; $i < $cantidad_palabras; $i++) { 
    if ($_REQUEST["palabra".$i] == $palabras[$i]) {
        echo "Palabras iguales". "<br>";
    } else {
        echo "Las palabras no son iguales ". " --- ";
        echo "La palabra correcta es: " . $palabras[$i] . "<br>";
    }
}

var_dump($_REQUEST);
echo "\n";


// if ($_REQUEST["palabra0"] == $palabras[0]) {
//     echo "Palabras iguales". "<br>";
// } else {
//     echo "Las palabras no son iguales ". "<br>";
// }

// if ($_REQUEST["palabra1"] == $palabras[1]) {
//     echo "Palabras iguales" . "<br>";
// } else {
//     echo "Las palabras no son iguales" . "<br>";
// }

// if ($_REQUEST["palabra2"] == $palabras[2]) {
//     echo "Palabras iguales" . "<br>";
// } else {
//     echo "Las palabras no son iguales" . "<br>";
// }

// print_r($_REQUEST["palabra0"]);

?>