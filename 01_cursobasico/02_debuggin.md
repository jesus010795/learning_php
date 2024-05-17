- **Funcion var_dump**

La función `var_dump()` en PHP es una herramienta muy útil para imprimir información detallada sobre una o más variables, incluyendo su tipo y valor. Es especialmente útil durante la depuración o cuando necesitas comprender la estructura de una variable o conjunto de variables.

Ejemplo basico de como usar var_dump

```
$persona = array(
    "nombre" => "Juan", 
    "edad" => 30, 
    "ciudad" => "Madrid"
);

```

```
var_dump( $persona );

array(3) {
  ["nombre"]=>
  string(4) "Juan"
  ["edad"]=>
  int(30)
  ["ciudad"]=>
  string(6) "Madrid"
}
```
En la salida de `var_dump()`, verás el tipo de datos de la variable seguido de su valor. Para los arrays, `var_dump() `también proporciona información sobre el número de elementos y los tipos y valores de cada elemento.

- **Funcion print_r**

La función `print_r() `en PHP es otra herramienta útil para imprimir variables de una manera más legible que echo o `var_dump()`. Similar a `var_dump()`, `print_r()` te permite imprimir información sobre una variable, pero de una manera más estructurada y fácil de leer.

Ejmplo

```
<?php
$numero = 10;
$nombre = "Juan";
$lista = array(1, 2, 3);

print_r($numero);
print_r($nombre);
print_r($lista);
?>
```

```
10
Juan
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
```

```
print_r($persona);

Array
(
    [nombre] => Juan
    [edad] => 30
    [ciudad] => Madrid
)
```

Al igual que con `var_dump()`, `print_r()` imprime el valor de la variable $numero y $nombre, y proporciona una representación más legible de un array con su estructura y valores.

Una de las diferencias principales entre `print_r()` y `var_dump()` es que `print_r()` no proporciona información detallada sobre el tipo de datos de la variable, como lo hace `var_dump()`. Sin embargo, `print_r()` puede ser más fácil de leer cuando trabajas con estructuras de datos complejas, especialmente con arrays multidimensionales o objetos.