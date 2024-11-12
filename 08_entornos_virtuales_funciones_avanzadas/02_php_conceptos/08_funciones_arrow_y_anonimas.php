<?php
// $message = "Hola";

// $greeting = function($name) use ($message)
// {
//     return "$message $name";
// };

//echo $greeting('Jesus'); // output: Hola Jesus


// FUNCION ANONIMA COMO PARAMETRO DE OTRA FUNCION
$numbers = [2,4,3,5,8];

$numbers_by_2 = array_map(function($current){
    return $current *2;
}, $numbers);

echo "<pre>";
print_r($numbers_by_2);
echo "</pre>";


$function_by_3 = function($current){
    return $current * 3;
};

$numbers_by_3 = array_map($function_by_3, $numbers);

echo "<pre>";
print_r($numbers_by_3);
echo "</pre>";


// ------ FUNCIONES DE FLECHA ------

$greeting = fn($name) => "Hola $name";

echo "<pre>";
print_r($greeting("Jesus"));
echo "</pre>";

// Utilizando variables globales

$message = "Hola ..";

$another_greet = fn($name)=> "$message $name";
echo "<pre>";
print_r($another_greet("Martha"));
echo "</pre>";

echo "\nEjemplo con funcion map \n";

$numbers_by_5 = array_map(fn($current)=> $current *5, $numbers);

echo "<pre>";
print_r($numbers_by_5);
echo "</pre>";


// -- otro ejemplo de arrow function

$cajero = 0;

$agregar_dinero = fn($cantidad) => $cajero + $cantidad;

$agregar_dinero(23);

echo "<pre>";
print_r($agregar_dinero(23));
echo "</pre>";

// ES IMPORTANTE CONSIDERAR QUE LAS ARROW FUNCTIONS NO MODIFICAN
//EL AMBITO GLOBAL DE UNA VARIABLE


// ----  OTRO EJEMPLO CON FUNCION FILTER
//Filtrar mayores de edad

$edades = [12,17,18,29,28,33];

$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);

echo "<pre>";
print_r($mayores_de_edad);
echo "</pre>";

?>
