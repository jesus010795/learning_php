# While

En PHP, al igual que en muchos otros lenguajes de programación, el bucle while es una estructura que permite ejecutar un bloque de código repetidamente mientras se cumpla una condición específica. Aquí tienes un ejemplo básico de cómo se usa:

```
<?php
$contador = 0;

// Mientras $contador sea menor que 5, se ejecutará el bloque de código dentro del bucle.
while ($contador < 5) {
    echo "El valor del contador es: $contador <br>";
    $contador++; // Incrementa el contador en 1 en cada iteración.
}

echo "El bucle while ha terminado";
?>
```

En este ejemplo, la variable `$contador` se inicializa en 0. Luego, el bucle while se ejecuta mientras `$contador` sea menor que 5. En cada iteración del bucle, se imprime el valor actual de `$contador` y luego se incrementa en 1 con `$contador++`. Cuando `$contador` alcanza el valor de 5, la condición `$contador` < 5 ya no se cumple y el bucle while se detiene.

Es importante tener en cuenta que si la condición inicialmente es falsa, el bloque de código dentro del bucle while nunca se ejecutará. Por ejemplo, si `$contador` se inicializara en 6, el bucle nunca se ejecutaría porque la condición `$contador` < 5 ya sería falsa desde el principio.