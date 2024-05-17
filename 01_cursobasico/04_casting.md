# Casting 

El casting en PHP se refiere a la conversión explícita de un tipo de dato a otro. Esto se hace utilizando funciones específicas de conversión de tipo o mediante el uso de operadores de conversión. El casting es útil cuando necesitas convertir un tipo de dato a otro para realizar operaciones o manipulaciones específicas.

PHP proporciona varias funciones de casting para realizar conversiones entre diferentes tipos de datos. Algunas de las funciones de casting más comunes son:

***Casting a Entero (Integer)***

Puedes convertir un valor a entero utilizando la función intval() o mediante la conversión explícita (int).

```
$cadena = "10";
$entero1 = intval($cadena); // Usando intval()
$entero2 = (int) $cadena; // Usando conversión explícita
```

***Casting a Flotante (Float)***

Puedes convertir un valor a flotante utilizando la función floatval() o mediante la conversión explícita (float).

```
$cadena = "10.5";
$flotante1 = floatval($cadena); // Usando floatval()
$flotante2 = (float) $cadena; // Usando conversión explícita
```

***Casting a Cadena (String)***

Puedes convertir un valor a cadena utilizando la función strval() o mediante la conversión explícita (string).

```
$numero = 10;
$cadena1 = strval($numero); // Usando strval()
$cadena2 = (string) $numero; // Usando conversión explícita
```

***Casting a Booleano (Boolean)***

Puedes convertir un valor a booleano utilizando la función boolval() o mediante la conversión explícita (bool).

```
$valorBooleano = 0;
$booleano1 = boolval($valorBooleano); // Usando boolval()
$booleano2 = (bool) $valorBooleano; // Usando conversión explícita
```

> Cualquier numero que no sea cero sera un true, un cero sera igual a false, si declaramos una variable de tipo string o char y esta vacia, tambien se convertira en un valor false.