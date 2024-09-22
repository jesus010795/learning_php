<?php

use Carbon\Language;

$employees = [
    "Jesus",
    "Kurt",
    "Mendez",
    "Alonso",
    "Luis"
];

array_push($employees, "Mike");

echo "<pre>";
print_r($employees);
echo "</pre>";

// array_pop


$last_employee = array_pop($employees);

echo "<pre>";
echo "<strong>Array_pop() </strong> <br>";
print_r($last_employee);
echo "</pre>";

// array_shift

$first_employee = array_shift($employees);

echo "<pre>";
echo "<strong>array_shift() </strong> <br>";
print_r($first_employee);
echo "</pre>";

// array_unshift

array_unshift($employees, "Johan", "Memo");
echo "<pre>";
echo "<strong>array_unshift() </strong> <br>";
print_r($employees);
echo "</pre>";

// count

echo "<pre>";
echo "<strong>count() </strong> <br>";
print_r(count($employees));
echo "</pre>";

//in_array


echo "<pre>";
echo "<strong>in_array() </strong> <br>";
if (in_array("Kurt", $employees)) {
    echo "Kurt está en el array <br>";
}
echo "</pre>";

echo "<pre>";
$frutas = ["Manzana", "Banana", "Naranja"];
if (in_array("Banana", $frutas)) {
    echo "Banana está en el array";
}
echo "</pre>";


//array_key_exists()
$ages = ["Juan" => 25, "Ana" => 30, "Pedro" => 35];

echo "<pre>";
echo "<strong>array_key_exists()</strong>  <br>";
if (array_key_exists("Ana", $ages)) {
    echo "Ana está en el array";
}
echo "</pre>";

//array_keys()
$keys = array_keys($ages);
echo "<pre>";
echo "<strong>array_keys()</strong> <br>";
print_r($keys);
echo "</pre>";

//array_values()

$values = array_values($ages);

echo "<pre>";
echo "<strong>array_values()</strong> <br>";
print_r($values);
echo "</pre>";

//sort()
//Ordenar valores de manera ascendente

sort($employees);
echo "<pre>";
echo "<strong>sort()</strong> <br>";
print_r($employees);
echo "</pre>";

//rsort()
//Ordena un array en forma descendente

rsort($employees);
echo "<pre>";
echo "<strong>rsort()</strong> <br>";
print_r($employees);
echo "</pre>";

//asort()
asort($ages);

echo "<pre>";
echo "<strong>asort()</strong> <br>";
print_r($ages);
echo "</pre>";

//ksort()
ksort($ages);

echo "<pre>";
echo "<strong>ksort()</strong> <br>";
print_r($ages);
echo "</pre>";

// array_map()
//Permite aplicar una funcion a cada elemento de un aaray.

$numbers = [1, 2, 3, 4, 5];
$square = array_map(function($n) {
    return $n * $n;
}, $numbers);

echo "<pre>";
echo "<strong>array_map()</strong> <br>";
print_r($numbers);

print_r($square);
echo "</pre>";

//array_filter

$even_numbers = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});
echo "<pre>";
echo "<strong>array_filter()</strong> <br>";
print_r($numbers);

print_r($even_numbers);
echo "</pre>";

//array_reduce

$shopping_cart = [
    ["nombre" => "Producto 1", "precio" => 25.99],
    ["nombre" => "Producto 2", "precio" => 15.50],
    ["nombre" => "Producto 3", "precio" => 9.99],
    ["nombre" => "Producto 4", "precio" => 20.00]
];

$total = array_reduce($shopping_cart, function($carry, $item){
    return $carry + $item['precio'];
}, 0);

echo "<pre>";
print("<strong>Array_reduce</strong> <br>");
print_r("El total del carrito es: $total");
echo "</pre>";

//Combinacion de arrays

//Array merge

$frontend = [
    "Javascript",
    "React",
    "Vue",
    "Angular",
];

$backend = [
    "Php",
    "Laravel",
    "Yii",
    "Python"
];

echo "<pre>";
print("<strong>array_merge</strong> <br>");
print_r($frontend);
print_r($backend);
var_dump(array_merge($frontend, $backend));
echo "</pre>";

// array_merge_recursive

$frontend_stack = [
    "Languages" => ["Javascript", "Typescript"],
    "Frameworks" => ["React", "Vue", "Angular"]
];

$backend_stack = [
    "Languages" => ["PHP", "Python"],
    "Frameworks" => ["Laravel", "Django", "Flask"]
];

echo "<pre>";
print("<strong>array_merge_recursive</strong> <br>");
print_r($frontend_stack);
print_r($backend_stack);
print("<strong>     - Combinacion de arrays</strong> <br>");
print_r(array_merge_recursive($frontend_stack, $backend_stack));
echo "</pre>";

//array_combine
$user_names = ["Jesus", "Martha", "Anahi"];
$user_ages = [29,28,8];

$user_data = array_combine($user_names, $user_ages);

echo "<pre>";
print("<strong>array_combine</strong> <br>");
print_r($user_names);
print_r($user_ages);
print_r($user_data);
echo "</pre>";



?>