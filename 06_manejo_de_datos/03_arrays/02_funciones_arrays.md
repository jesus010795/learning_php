# Funciones de arrays

En Php, trabajar con arrays es una tarea muy comun y PHP ofrece una amplia gama de funciones para manipularlos.

## Crear y modifcar arrays

- `array()`

Crea un array
```
<?php
$frutas = array("Manzana", "Banana", "Naranja");
?>
```

- `[]`

A partir de Php 5.4, se puede usar la sintaxis corta
```
<?php
$frutas = ["Manzana", "Banana", "Naranja"];
?>
```

- `arrays_push()`

Agrega uno o mas elementos al final de un array, recibe como primer parametro el array a modificar y como segundo parametro el elemento a agregar.

```
$employees = [
    "Jesus",
    "Kurt",
    "Mendez",
    "Alonso",
    "Luis"
];

array_push($employees, "Mike");
```

- `array_pop()`

Elimina el ultimo elemento de un array.
Podemos almacenar en una variable este ultimo elemento y manipularlo.

```

$last_employee = array_pop($employees);

```

- `array_shift()`

Elimina el primer elemnto de un array

```
$first_employee = array_shift($employees);
```

## Consultar informacion de arrays

- `count`

Cuenta los elementos de un array

```
echo "<pre>";
echo "<strong>count() </strong> <br>";
print_r(count($employees));
echo "</pre>";
```

- `in_array()`

Comprueba si un valor existe en un array.

```
echo "<pre>";
$frutas = ["Manzana", "Banana", "Naranja"];
if (in_array("Banana", $frutas)) {
    echo "Banana está en el array";
}
echo "</pre>";
```

- `array_key_exists()`

Comprueba si una clave existe en un array

```
$edades = ["Juan" => 25, "Ana" => 30, "Pedro" => 35];
if (array_key_exists("Ana", $edades)) {
    echo "Ana está en el array";
}
```

## Manipulacion de claves y valores

- `array_keys()`
Devuelve todas las claves de un array.

```
$keys = array_keys($ages);
print_r($keys);
```

- `array_values()`

Devuelve los valores de un array.

```
$values = array_values($ages);
```

## Ordenar arrays

- `sort()`

Ordena un array en orden ascendente

```
sort($employees);
```

- `rsort()`
Ordena un array en forma descendente.

```
rsort($employees);
echo "<pre>";
echo "<strong>rsort()</strong> <br>";
print_r($employees);
echo "</pre>";
```

- `asort()`

Ordena un array asociativo de forma ascendente manteniendola relacion clave valor.

```
asort($ages);
echo "<pre>";
echo "<strong>asort()</strong> <br>";
print_r($ages);
echo "</pre>";
```

- `ksort`

Ordena un array asociativo por sus claves en orden ascendente.

```
ksort($ages);

echo "<pre>";
echo "<strong>ksort()</strong> <br>";
print_r($ages);
echo "</pre>";
```

## Funciones de transformacion

- `array_map()`

Aplica una fucnion a cada elemento de un array.

```
$numbers = [1, 2, 3, 4, 5];
$square = array_map(function($n) {
    return $n * $n;
}, $numbers);

echo "<pre>";
echo "<strong>array_map()</strong> <br>";
print_r($numbers);

print_r($square);
echo "</pre>";
```

- `array_filter()`
Filtra los elementos de un array utilizando una funcion de callback.

```
$even_numbers = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});
echo "<pre>";
echo "<strong>array_filter()</strong> <br>";
print_r($numbers);

print_r($even_numbers);
echo "</pre>";
```

- `array_reduce()`

Reduce un array a un solo valor utilizando una funcion de callback.

Trabajaremos un ejemplo sobre un carrito de compras en donde sacaremos elt total de la compra.

1. Definicion de array de productos
```
$shopping_cart = [
    ["nombre" => "Producto 1", "precio" => 25.99],
    ["nombre" => "Producto 2", "precio" => 15.50],
    ["nombre" => "Producto 3", "precio" => 9.99],
    ["nombre" => "Producto 4", "precio" => 20.00]
];
```
2. Definicion de funcion reduce

```
$total = array_reduce($shopping_cart, function($carry, $item){
    return $carry + $item['precio'];
}, 0);
```
La función array_reduce() toma tres parámetros:

- El array a reducir ($shopping_cart).
- Una función de devolución de llamada que se aplica a cada elemento del array. Esta función toma dos parámetros:
    - `$carry`: El valor acumulado hasta el momento.
    - `$item`: El elemento actual del array.
- Un valor inicial para `$carry` (en este caso, 0).

La función callback suma el precio de cada producto al valor acumulado (`$carry`).

3. Finalmente se imprime el total
```
echo "<pre>";
print("<strong>Array_reduce</strong> <br>");
print_r("El total del carrito es: $total");
echo "</pre>";
```

## Combinación y División de Arrays
- `array_merge()`
Combina dos o más arrays.
```
<?php
$frutas1 = ["Manzana", "Banana"];
$frutas2 = ["Naranja", "Pera"];
$todasLasFrutas = array_merge($frutas1, $frutas2);
print_r($todasLasFrutas); // Imprime ["Manzana", "Banana", "Naranja", "Pera"]
?>
```
- `array_merge_recursive`

array_merge_recursive() es una función útil cuando se necesita combinar arrays recursivamente, es decir, cuando los valores de las claves repetidas también son arrays y deben combinarse de manera recursiva. Un ejemplo práctico de su uso podría ser la combinación de listas de lenguajes de programación y frameworks en frontend y backend.

```
$frontend_stack = [
    "Languages" => ["Javascript", "Typescript"],
    "Frameworks" => ["React", "Vue", "Angular"]
];

$backend_stack = [
    "Languages" => ["PHP", "Python"],
    "Frameworks" => ["Laravel", "Django", "Flask"]
];

echo "<pre>";
var_dump($frontend_stack);
print_r($backend_stack);
print("<strong>array_merge_recursive</strong> <br>");
print_r(array_merge_recursive($frontend_stack, $backend_stack));
echo "</pre>";

```

- `array_combine`
La función `array_combine()` en PHP se utiliza para combinar dos arrays de manera que ==uno se convierta en las claves del nuevo array y el otro se convierta en los valores correspondientes==. Específicamente, toma dos arrays de igual tamaño y los fusiona, asignando el primer array como las claves y el segundo como los valores.

    - sintaxis

    `array_combine(array $keys, array $values): array`

    `$keys`: El array que se usará como claves.
    `$values`: El array que se usará como valores.

    - Requisitos

        - Ambos arrays deben tener la misma cantidad de elementos.
        - Los valores del array de claves deben ser únicos y válidos para usarse como claves de un array (es decir, deben ser valores escalables, como números o cadenas de texto).

    - Ejmplo

    ```
    $user_names = ["Jesus", "Martha", "Anahi"];
    $user_ages = [29,28,8];

    $users_data = array_combine($user_names, $user_ages)

    ```

- `array_slice()`
Extrae una porción de un array.

```
<?php
$frutas = ["Manzana", "Banana", "Naranja", "Pera"];
$porcion = array_slice($frutas, 1, 2);
print_r($porcion); // Imprime ["Banana", "Naranja"]
?>
```
- `array_splice()`
Elimina una porción de un array y la reemplaza con otros elementos.
```
<?php
$frutas = ["Manzana", "Banana", "Naranja", "Pera"];
array_splice($frutas, 1, 2, ["Kiwi", "Mango"]);
print_r($frutas); // Imprime ["Manzana", "Kiwi", "Mango", "Pera"]
?>
```

## Buscar en Arrays
- `array_search()`
Busca un valor en un array y devuelve la clave correspondiente.
```
<?php
$frutas = ["Manzana", "Banana", "Naranja"];
$clave = array_search("Banana", $frutas);
echo $clave; // Imprime 1
?>
```
- `array_keys()`
Devuelve todas las claves de un array que coinciden con un valor.
```
<?php
$frutas = ["Manzana", "Banana", "Naranja", "Banana"];
$claves = array_keys($frutas, "Banana");
print_r($claves); // Imprime [1, 3]
?>
```