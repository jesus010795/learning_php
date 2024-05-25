# Crear un servidor de archivos php desde cualquier carpeta

`php -S localhost:8000 nombre_archivo.php`

# Integrar php con html

- Escribiendo etiquetas php

```

    <?php

    echo "Hola mundo desde php <br>";
    echo "<p>Hola desde un parrafo</p>";

    ?>
```

- Etiquetas mas cortas

```
<?=
"<i>Otra forma de imprimir desde php</i>"
?>
```

## Incrustando variables de phph en html

Hasta arriba del documentos definiremos una variable y posteriormente la mandaremos a llamar en nuestras etiquetas html

- Declaracion de variable
```
<?php 
$mi_variable = "Jesus";
?>
```
- Invocacion de variable
```
 <p>Imprimir variable declarada:  <?= $mi_variable?> </p>
```

## Resumen

Existen varias formas de imprimir HTML utilizando PHP. A continuación, se presentan algunas de las formas más comunes:

- Concatenar HTML con variables PHP

Puedes concatenar cadenas de texto HTML con variables PHP para imprimir contenido dinámico. Aquí hay un ejemplo:

```
<?php
$nombre = "Juan";
$edad = 25;
echo "<h2>Bienvenido, " . $nombre . "!</h2>";
echo "<p>Tienes " . $edad . " años.</p>";
?>
```

- Utilizar la sintaxis de apertura y cierre de PHP

Puedes utilizar la sintaxis de apertura y cierre de PHP para alternar entre el modo PHP y el modo HTML. Aquí hay un ejemplo:

```
<?php
$nombre = "María";
$edad = 30;
?>
<h2>Bienvenida, <?php echo $nombre; ?>!</h2>
<p>Tienes <?php echo $edad; ?> años.</p>
```

- Utilizar la función printf

Puedes utilizar la función printf para formatear e imprimir contenido HTML. Aquí hay un ejemplo:

```
<?php
$nombre = "Pedro";
$edad = 35;
printf("<h2>Bienvenido, %s!</h2>", $nombre);
printf("<p>Tienes %d años.</p>", $edad);
?>
```

- Utilizar la sintaxis abreviada <?= $variable ?>

Puedes utilizar la sintaxis abreviada <?= $variable ?> para imprimir el valor de una variable PHP directamente en el HTML. Aquí hay un ejemplo:

```
<?php
$titulo = "Mi Página";
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title><?= $titulo ?></title>
</head>
<body>
   <h2>Bienvenidos a <?= $titulo ?>!</h2>
   <p>Esta es una página HTML generada por PHP.</p>
</body>
</html>
```