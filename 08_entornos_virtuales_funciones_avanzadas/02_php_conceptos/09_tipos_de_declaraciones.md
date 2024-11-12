# Declaraciones de tipo escalar

cuando declaramos una funcion es posible indicar que tipo de datos queremos recibir en nuestros parametros. Esto nos da la certeza de que estamos trabajand con el tipo de dato que realmente necesitamos.

en otras palabras podemos tipar nuestras funciones. Este comportamiento por defecto, es de tipo coercitivo (opcional), pero podemos hacer que sea obligatorio poniendo la palabra reservada `declare` al inicio de nuestro script.

- Ejemplo
```

function calc_area_triangulo(int $base, int $altura, string $nombre)
{
    return "Hola $nombre, el area de tu triangulo es: " . ($base * $altura) / 2;
}

echo calc_area_triangulo(3,8,"Michissancio \n");
```
>Es buena practica usar tipos de datos de manera explicita, y su utilizacion nos da seguridad de con que tipos de datos estamos trabajando.

# Declaraciones de tipo devolucion

De la misma forma que podemos declarar que tipo de datos queremos recibir, tambien podemos declarar que tipo de dato va a devoler nuestra funcion. Esto da la ceteza a cualquier persona que la implemente de que esta trabajando con el tipo de dato que realmente necesita.

Este comportamiento por defecto, es de tipo coercitivo (opcional), pero podemos hacer que sea obligatorio usando la palabra reservada `declare` al inicio de nuestro script.

```

function suma(int $n1, int $n2) : int
{
    return $n1 + $n2;
}

echo "<pre>";
print_r(suma(1,2));
echo "</pre>";
```