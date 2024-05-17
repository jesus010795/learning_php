<?php
do {
    // Solicitar al usuario que ingrese un número entre 1 y 10
    echo "Por favor, ingresa un número entre 1 y 10: \n";
    $numero = readline();

    // Verificar si la entrada es un número válido
    if (is_numeric($numero) && $numero >= 1 && $numero <= 10) {
        echo "¡Gracias por ingresar el número válido: $numero! \n";
        break; // Salir del bucle si la entrada es válida
    } else {
        echo "El número ingresado no es válido. Intenta nuevamente.\n";
    }
} while (true); // Repetir el bucle indefinidamente hasta que se ingrese un número válido
?>