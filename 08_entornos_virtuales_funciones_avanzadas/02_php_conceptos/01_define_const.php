<?php

define("MICHI", "Mr. Michi");

const PI = 4.56;

echo PI . "<br>";

$decision = true;

if ($decision) {
    define("BLOCK_CONST", "Constante creada dentro de bloque");

    echo (BLOCK_CONST);
}

echo PHP_VERSION;

// Este if nos arrojara un error de sontaxis por que const no se puede declarar dentro de un bloque.
//Incluso el editor de cosgio nos arroja un error.

// if ($decision) {
//     const BLOCK_CONST = "Constante creada dentro de bloque";

//     echo (BLOCK_CONST);
// }
