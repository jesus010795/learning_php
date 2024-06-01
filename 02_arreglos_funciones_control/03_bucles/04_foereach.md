# for each

El bucle foreach en PHP es una estructura de control diseñada específicamente para iterar sobre elementos de arrays y objetos. Proporciona una forma sencilla y conveniente de recorrer todos los elementos de un array o las propiedades de un objeto. La sintaxis general del bucle foreach es la siguiente:

```
foreach ($array as $clave => $valor) {
    // Código a ejecutar para cada elemento
}
```

- `$array`: Es el array que deseas recorrer.
- `$clave`: Es una variable que contendrá la clave del elemento actual en cada iteración (opcional si el array es asociativo).
- `$valor`: Es una variable que contendrá el valor del elemento actual en cada iteración.

***Ejemplos***

- **Ejemplo 1**

En este ejemplo, el bucle foreach recorre el array $colores e imprime cada elemento del array ($color) seguido de un salto de línea.

```
$colores = array("rojo", "verde", "azul");

foreach ($colores as $color) {
    echo $color . "\n";
}
```

- **Ejemplo 2**

En este ejemplo, el array `$estudiantes` es un array asociativo donde las claves son los nombres de los estudiantes y los valores son sus edades. El bucle foreach recorre el array, asignando cada clave a `$nombre` y cada valor a `$edad`, e imprime un mensaje con el nombre y la edad de cada estudiante.

```
$estudiantes = array(
    "Juan" => 18,
    "María" => 20,
    "Pedro" => 19
);

foreach ($estudiantes as $nombre => $edad) {
    echo "$nombre tiene $edad años. \n";
}
```

- **Ejemplo 3**

En este ejemplo, `$libros` es un array multidimensional donde cada elemento es un array asociativo que representa un libro con su título, autor y año de publicación. El bucle foreach recorre este array, asignando cada elemento a la variable `$libro`, y luego imprime los detalles de cada libro. Este ejemplo muestra cómo el bucle foreach puede manejar arrays multidimensionales y acceder a valores asociativos dentro de ellos.

```
$libros = array(
    array("título" => "Harry Potter", "autor" => "J.K. Rowling", "año" => 1997),
    array("título" => "El Señor de los Anillos", "autor" => "J.R.R. Tolkien", "año" => 1954),
    array("título" => "Cien años de soledad", "autor" => "Gabriel García Márquez", "año" => 1967)
);

foreach ($libros as $libro) {
    echo "Título: " . $libro["título"] . "\n";
    echo "Autor: " . $libro["autor"] . "\n";
    echo "Año: " . $libro["año"] . "\n \n";
}
```


