<?php

/*

En una escuela están almacenando los juguetes favoritos de los estudiantes de acuerdo a su edad en un lugar específico de la bodega de esta forma:

Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.

Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.

Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.

Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.

Según una lista que contiene las edades de cada estudiante debes validar su edad y mostrar a través de un mensaje en dónde tendrán que almacenar sus juguetes.

*/

$estudiantes = [
    array(
        "nombre" => "Mateo",
        "edad" => 8, // Edad del estudiante (3 a 12 años)
        "juguete" => "Leggos"
    ),
    array(
        "nombre" => "Santiago",
        "edad" => null, // Edad del estudiante (3 a 12 años)
        "juguete" => "Carrito"
    ),
    array(
        "nombre" => "Leonardo",
        "edad" => 11, // Edad del estudiante (3 a 12 años)
        "juguete" => "Rompecabezas"
    ),
    array(
        "nombre" => "Sebastian",
        "edad" => 9, // Edad del estudiante (3 a 12 años)
        "juguete" => "Muneco"
    ),
    array(
        "nombre" => "Emiliano",
        "edad" => 6, // Edad del estudiante (3 a 12 años)
        "juguete" => "Carro a control"
    ),
    array(
        "nombre" => "Sofía",
        "edad" => 2, // Edad del estudiante (3 a 12 años)
        "juguete" => "Bebe lloron"
    ),
    array(
        "nombre" => "Valentina",
        "edad" => 3, // Edad del estudiante (3 a 12 años)
        "juguete" => "Play Do"
    ),
    array(
        "nombre" => "Regina",
        "edad" => 4, // Edad del estudiante (3 a 12 años)
        "juguete" => "Polly Pocket"
    ),
    array(
        "nombre" => "Camila",
        "edad" => null, // Edad del estudiante (3 a 12 años)
        "juguete" => "Muneca"
    ),
    array(
        "nombre" => "Mariana",
        "edad" => 2, // Edad del estudiante (3 a 12 años)
        "juguete" => "Pinni Pon"
    ),
];

$menores_5 = [];
$entre_5_7 = [];
$mas_de_7 = [];
$sin_edad = [];


foreach ($estudiantes as $estudiante) {
    $current_age = $estudiante["edad"];
    $bodega = "";

    if ($current_age > 0 && $current_age < 5) {
        $bodega = "inferior";
    } elseif (($current_age >= 5 && $current_age <= 7)) {
        $bodega = "media";
    } elseif ($current_age > 7) {
        $bodega = "alta";
    } else {
        $bodega = "indefinida";
    }


    switch ($bodega) {

        case "indefinida":
            echo "Estudiantes sin edad asignada \n";
            array_push($sin_edad, $estudiante);
            break;
        case "inferior":
            echo "menor a 5 \n";
            array_push($menores_5, $estudiante);
            break;
        case "media";
            echo "entre 5 y 7 \n";
            array_push($entre_5_7, $estudiante);
            break;
        case "alta":
            echo "Mayores a 7 \n";
            array_push($mas_de_7, $estudiante);
            break;
        default:
            break;
    }
}

echo "------- ESTUDIANTES MENORES DE 5 \n";
mostrar_estudiantes($menores_5);

echo "------- ESTUDIANTES ENTRE 5 Y 7 \n";
mostrar_estudiantes($entre_5_7);

echo "------- ESTUDIANTES MAYORES DE 7 \n";
mostrar_estudiantes($mas_de_7);


echo "------- ESTUDIANTES SIN EDAD \n";
mostrar_estudiantes($sin_edad);

function mostrar_estudiantes($array_estudiantes)
{
    foreach ($array_estudiantes as $estudiante) {
        foreach ($estudiante as $clave => $valor) {
            echo "$clave: $valor \n";
        }
        echo "\n";
    }
}
