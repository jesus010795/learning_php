# Deuda técnica
<hr>

La deuda técnica es el coste y los intereses a pagar por hacer mal las cosas. Esto paso por que como programadores queremos programar algo rápido hoy y que funcione, pero a futuro cuando volvamos a nuestro código nos daremos cuenta que no es difícil de modificar.

🙀 Tenemos que programar bien.

Cómo evitar la deuda técnica
Tenemos que programar con pruebas.
Documentar a tiempo
Refactorizar (mejorar) de inmediato nuestro código.

# Code smell
<hr>

Hace referencia al mal olor del código. Este concepto no se refiere a errores técnicos, sino a errores de orden y diseño. Esto sucede mucho cuando intentamos crear soluciones a partir de otras soluciones.

La solución a estos casos es crear una abstracción.

- Cómo evitarlo

Para esto debemos hacer una programación más limpia, y reusable. Tenemos que evitar crear grandes métodos, o sea, programación estructura dentro de clases. También evitar crear grandes clases o superclases.

Y sin duda, nosotros debemos evitar a toda costa copiar y pegar código.

>🙃 Recuerda: el sistema va a funcionar pero a futuro va a ser horrible de mantener, hasta imposible.

# Codigo espaguetti
<hr>
Un código espagueti es código que está estructurado mediante if, while, for netamente, todo en un mismo archivo donde solamente buscamos resolver el problema. Cuando creamos código estructurado corremos peligro de crear código espagueti. La OOP nos ayuda evitarlo.

💸 El dinero en esta profesión está en el mantenimiento del código.

Cómo evitar el código espagueti
Resolver el problema
Crea de forma lógica y coherente diferentes métodos que reemplacen tus estructuras de control.
Crea una o varias clases dependiendo el caso.

# Inclusion de archivos
Las funciones `include`, `require`, y `require_once` en PHP se utilizan para incluir y ejecutar archivos dentro de otros archivos PHP. 

- `include`
La función `include` se utiliza para incluir y ejecutar un archivo PHP. Si el archivo no se encuentra, PHP emitirá una advertencia (warning), pero el script continuará ejecutándose.

- Ejemplo

como ejemplo sencillo crearemos una funcion en un archivo que unicamente nos retornara un nombre y un mensaje.

- `greet.php`

```
<?php
function greet($name, $message)
{
    return "$name: $message";
}
?>
```

- `index.php`

Desde otro archivo mandaremos a llamar el archivo greet.php que contienen la funcion que necesitamos

Para lograr esto es necesario hacer uso de include y referenciar que necesitaremos todo lo que contenga el archivo greet.php, en este caso la funcion.

```
<?php

include `greet.php`;

echo greet("Jesus", "Hola como estas");

?>
```

Lo que php hace es simular que arriba de la funcion echo se encuentra la funcion greet, como si todo estuviera en un mismo archivo. Con esto podemos crear pequenos modulos con funcionalidades especificas y sin necesidad de reescribir codigo.

- `require`

La función `require` es similar a include, pero si el archivo no se encuentra, PHP emitirá un error fatal (fatal error) y el script dejará de ejecutarse. Esto es útil cuando el archivo es esencial para el funcionamiento de la aplicación.

```
<?php

require `greet.php`;

echo greet("Jesus", "Hola como estas");

?>
```


- `require once`

La función `require_once` es similar a require, pero asegura que el archivo solo se incluya una vez. Esto es útil para evitar problemas de redefinición de funciones o inclusión múltiple de archivos.

```
<?php

require_once `greet.php`;
require_once `greet.php`;

echo greet("Jesus", "Hola como estas");

?>
```