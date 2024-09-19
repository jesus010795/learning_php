# Arrays

Los arrays en php son estructuras de datos que permiten almacenar multiples valores en una sola variable. Los arrays pueden contenes cualquier tipo de valor incluyendo otros arrays, lo que permite crear estructuras de datos compejas.

- Arrays basicos

1. Arrays indexado: Este tipo de array utiliza numeros enteros como claves. Por defecto, PHP asigna claves numericas que comienzan desde cero.

```
<?php
// Crear un array indexado
$frutas = array("Manzana", "Banana", "Naranja");

// Acceder a un valor en el array
echo $frutas[0]; // Imprime "Manzana"
?>
```
2. Array asociativo: Utiliza claves personalizadas para cada valor