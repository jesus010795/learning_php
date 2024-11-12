<?php

/**
 * Los named arguments son una forma de pasarle parametros a una
 * funcion basandose en el nombre del parametro en lugar de la 
 * posicion, es decir, podemos simplemente mencionar a que
 * parametro le queremos pasar un valor.
 * 
 * Esta funcion esta disponible a partir de la verson 8.0.0.
 */


function get_person_info($name, $age, $country)
{
    echo "Nombre: $name - Edad: $age - Pais: $country";
}

// Invocando funcion de manera tradicional
get_person_info("Jesus", 29, "Mexico");

//invocando funcion con variables
get_person_info(
    $age = 30, 
    $country = "Colombia", 
    $name = "Edu"
);

//Invicando la funcion con named arguments
//En este caso se omiten el signo de dolar para hacer valer los 
//named arguments
get_person_info(
    country: "Argentina",
    age: 28,
    name: "Michisancio"
)



?>
