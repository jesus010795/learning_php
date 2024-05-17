# Operador unpacking

El operador de "unpacking" en PHP, también conocido como el operador de propagación o spread operator, es una característica introducida en PHP 7.4. Este operador permite expandir elementos de un array o iterables (como arrays o objetos que implementan la interfaz Traversable) dentro de lugares donde múltiples elementos son esperados, como argumentos de funciones o elementos de un array.

- Sintaxis

```
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$mergedArray = [...$array1, ...$array2];

// Esto es equivalente a:
// $mergedArray = array_merge($array1, $array2);
```

En este ejemplo, `...$array1` y `...$array2` expanden los elementos de los arrays `$array1` y `$array2` respectivamente, y luego se combinan en un solo array `$mergedArray`. Esto produce un array que contiene todos los elementos de ambos arrays originales.

# Uso de operador unpacking con funciones

```
function suma($a, $b, $c) {
    return $a + $b + $c;
}

$valores = [1, 2, 3];

echo suma(...$valores); // Esto imprimirá 6
```
En este caso, los valores del array `$valores` se desempaquetan y se pasan como argumentos a la función `suma()`. Esto es equivalente a llamar a la función como `suma(1, 2, 3)`.

## Declarando una funcion que recibe un array desempaquetado (unpacking)

En este ejemplo crearemos una funion que suma todos los elementos de un aaray.

```
function sumarElementos(...$numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

// Uso de la función
echo sumarElementos(1, 2, 3, 4, 5); // Esto imprimirá 15
```

En este caso, la función `sumarElementos` toma un número variable de argumentos. El operador ...`$numeros` permite que la función acepte cualquier cantidad de argumentos, los cuales se almacenan en el array `$numeros`. Luego, la función itera sobre estos números y los suma para devolver el resultado.

Puedes llamar a esta función con cualquier cantidad de números y devolverá la suma de todos ellos. Por ejemplo, sumarElementos(1, 2, 3) devolverá 6, y sumarElementos(1, 2, 3, 4, 5) devolverá 15.

## Funcion que recibe un array y suma todos sus lementos

El siguiente caso puede parecer similar, sin embargo nuestra primera funcion si necesitamos pasar como tal un array ya predeclarado o si ejecutamos un rango de numeros y lo queremos sumar nos arroajara un error ya que recibe una cantidad indefinida de numeros que aparenta ser una lista o un array unidimensional mas no como tal un array.

```
$numeros = [1,2,3,4,5,6,7,8];

function sumaArray ($array) {
    $res = 0;

    foreach($array as $elemento){
        $res += $elemento;
    }

    return $res;
    
}

// Si intento aplicar esta sintaxis con la primera funcion, no ejecutara la suma
echo sumaArray($numeros) . "\n";
echo sumaArray(range(2,22)) . "\n";

```