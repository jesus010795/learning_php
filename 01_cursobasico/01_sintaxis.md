# Sintaxis basica

- **`<?php`** Etiqueta de apertura: Es la que declara que empezaremos a trabajar con php
- **`?>`** Etiqueta de cierre: Es opcional y se utiliza unicamente cuando convinamos codigo php con html, si unicamenete codificamos en phph esta etiqueta no es obligatoria.

```
<?php

echo"Funcion para imprimir cualquier cosa \n";
```

- **Variables**
Las variables en PHP comienzan con el símbolo $. No necesitan ser declaradas explícitamente y pueden contener letras, números y guiones bajos (pero deben comenzar con una letra o un guion bajo)

```
<?php
$nombre = "Juan";
$edad = 25;
$precio_producto = 10.5;
?>
```
- **Constantes**

Las constantes se definen utilizando la función define() y se accede a ellas sin el signo del dólar ($). Por convención, los nombres de las constantes se escriben en mayúsculas.

- Definicion

```
define("PI", 3.14);
define("NOMBRE", "Juan Pérez");
```

- Acceso

~~~
echo PI; // Esto imprimirá 3.14
echo NOMBRE; // Esto imprimirá Juan Pérez
~~~


- **Impresión de texto**

Para mostrar texto en PHP, puedes usar la función echo o print.

```
<?php
echo "Hola, mundo!";
print "¡Hola, mundo!";
?>
```
- **Concatenacion de variables**
La concatenación de variables en PHP se refiere a la acción de unir múltiples variables o valores de cadena en una sola cadena. Esto se puede hacer utilizando el operador de concatenación, que es un punto `.` en PHP
Ejemplo:

```
<?php
$nombre = "Juan";
$apellido = "Pérez";
$nombre_completo = $nombre . " " . $apellido;
echo $nombre_completo; // Esto mostrará "Juan Pérez"

print "Yo me llamo " . $nombre . " " . $apellido . "\n";
//Yo me llamo Juan Perez
?>
```

- Concatenacion sin operador punto

Además del método de concatenación usando el operador punto (.), también puedes imprimir variables dentro de una cadena de texto utilizando la sintaxis de comillas dobles ("). Dentro de las comillas dobles, las variables se expanden automáticamente y su valor se imprime sin necesidad de utilizar el operador de concatenación.

```
<?php
$nombre = "Juan";
$apellido = "Pérez";
echo "El nombre completo es: $nombre $apellido"; // No se necesita el signo de concatenación
?>
```
- Concatenacion de operaciones matematicas

Puedes concatenar operaciones matemáticas dentro de las funciones echo y print de la misma manera que concatenas variables o texto. Aquí te muestro un ejemplo:

```
<?php
// Concatenación de operaciones matemáticas dentro de echo
echo "El resultado de la suma es: " . (5 + 3); 
// Esto imprimirá: El resultado de la suma es: 8

echo "El resultado de la resta es: " . (10 - 4); 
// Esto imprimirá: El resultado de la resta es: 6

// Concatenación de operaciones matemáticas dentro de print
print "El resultado de la multiplicación es: " . (6 * 2); 
// Esto imprimirá: El resultado de la multiplicación es: 12
?>
```