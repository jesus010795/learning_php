# Operador nave espacial

El operador nave espacial (<=>) es un operador de comparación introducido en PHP 7. Este operador compara dos expresiones y devuelve un valor entero que indica si la primera expresión es menor que, igual a, o mayor que la segunda expresión. Aquí tienes una explicación con ejemplos:

### Ejemplos Simples:

- **Comparación Numérica**:

```
echo 5 <=> 2; // Devuelve 1 (5 es mayor que 2)
echo 2 <=> 5; // Devuelve -1 (2 es menor que 5)
echo 3 <=> 3; // Devuelve 0 (ambos son iguales)
```

En este ejemplo, el operador <=> compara los números y devuelve un valor positivo si el primer número es mayor, un valor negativo si el primer número es menor, y cero si ambos números son iguales.

- **Comparación de Cadenas:**

```
echo "abc" <=> "def"; // Devuelve -1 ("abc" es menor que "def" en orden lexicográfico)
echo "xyz" <=> "xyz"; // Devuelve 0 (ambas cadenas son iguales)
echo "pqr" <=> "lmn"; // Devuelve 1 ("pqr" es mayor que "lmn" en orden lexicográfico)
```

En este caso, el operador <=> compara las cadenas alfabéticamente utilizando el orden lexicográfico.

- **Comparación de Valores Mixtos:**

```
echo 3 <=> "2"; // Devuelve 1 (3 es mayor que "2")
echo "abc" <=> 123; // Devuelve -1 ("abc" es menor que 123 en orden lexicográfico)
echo 2.5 <=> 2; // Devuelve 1 (2.5 es mayor que 2)
```

### Ejemplos en Funciones

- **Ordenamiento de Números:**

```
function comparar_numeros($a, $b) {
    return $a <=> $b;
}

$numeros = [3, 1, 4, 2];
usort($numeros, 'comparar_numeros');
print_r($numeros); // Imprime el array ordenado [1, 2, 3, 4]
```

En este ejemplo, la función comparar_numeros() se utiliza con usort() para ordenar un array de números de menor a mayor.


- ***Documentacion `usort()`***

    [usort()](https://www.php.net/manual/es/function.usort.php)

    - Es importante tener en cuenta que usort devuelve el mismo array modificado.