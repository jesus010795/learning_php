<?php

function get_pokemon()
{
    $number = rand(1, 5);

    switch ($number) {
        case 1:
            echo "Pikachu \n";
            break;
        case 2:
            echo "Charizard \n";
            # code...
            break;
        case 3:
            echo "Charmander \n";
            break;

        default:
            echo"Pokemon no encontrado \n";
            break;
    }
}


// ------ oRDENAR UN ARRAY

function ordenar_array($array) {
    sort($array);
    return $array;
}

// Uso de la función
$numeros = [4, 2, 7, 1, 5];
$numeros_ordenados = ordenar_array($numeros);
echo "Array ordenado: " . implode(", ", $numeros_ordenados) . "\n";


// ----- Validar un formulario

function validar_formulario($datos) {
    $errores = [];

    // Validar nombre
    if (empty($datos['nombre'])) {
        $errores[] = "El nombre es obligatorio \n";
    }

    // Validar email
    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no es válido \n";
    }

    // Más validaciones...

    return $errores;
}

// --- Uso de la función

$formulario = [
    'nombre' => 'Juan',
    'email' => 'correo@example.com',
    // Otros datos del formulario
];

$errores = validar_formulario($formulario);

if (empty($errores)) {
    echo "El formulario es válido. ¡Se puede procesar! \n";
} else {
    echo "Se encontraron errores en el formulario: \n";
    foreach ($errores as $error) {
        echo "$error \n";
    }
}


// uso de return

function obtener_dia_de_la_semana() {

    $dia = rand(1,8);
    switch ($dia) {
        case 1:
            return "Lunes";
        case 2:
            return "Martes";
        case 3:
            return "Miércoles";
        case 4:
            return "Jueves";
        case 5:
            return "Viernes";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return "Número de día inválido";
    }
}


// Ejemplos de uso de la función
echo obtener_dia_de_la_semana() . "\n"; 
echo obtener_dia_de_la_semana() . "\n"; 
echo obtener_dia_de_la_semana() . "\n"; 