# Switch

En PHP, la sentencia switch proporciona una manera de evaluar una expresión y ejecutar diferentes bloques de código dependiendo del valor de esa expresión. Es similar a una serie de declaraciones if-elseif-else, pero puede resultar más legible y conciso en ciertas situaciones.

Aquí tienes un ejemplo básico de cómo se usa la sentencia switch en PHP:

```
$opcion = 2;

switch ($opcion) {
    case 1:
        echo "La opción es 1";
        break;
    case 2:
        echo "La opción es 2";
        break;
    case 3:
        echo "La opción es 3";
        break;
    default:
        echo "La opción no es válida";
}
```

En este ejemplo, la variable `$opcion` se evalúa en cada caso. Si `$opcion` es igual a 1, se ejecutará el bloque de código bajo case 1. Si `$opcion` es igual a 2, se ejecutará el bloque de código bajo case 2, y así sucesivamente. El break al final de cada caso es importante para evitar que la ejecución continúe en los siguientes casos.

El bloque de código bajo default se ejecutará si ninguna de las expresiones case coincide con el valor de la variable. Esto proporciona una especie de "cierre" o "fallback" para manejar casos no previstos.

La sentencia switch puede ser útil cuando tienes una variable con múltiples valores posibles y quieres ejecutar diferentes bloques de código dependiendo de esos valores.

***Otro ejemplo***

```
$tipoVehiculo = "camion";

switch ($tipoVehiculo) {
    case "coche":
        echo "El peaje para coches es $2";
        break;
    case "moto":
        echo "El peaje para motos es $1";
        break;
    case "camion":
    case "camioneta":
        echo "El peaje para camiones y camionetas es $5";
        break;
    case "autobus":
        echo "El peaje para autobuses es $10";
        break;
    default:
        echo "Tipo de vehículo no reconocido";
}
```

En este ejemplo, `$tipoVehiculo` representa el tipo de vehículo que está pasando por el peaje. Dependiendo del tipo de vehículo, se calcula y muestra el peaje correspondiente.

Notarás que en el caso de =="camion" y "camioneta" se utilizó una forma de agrupación de casos, donde se ejecuta el mismo bloque de código para ambos tipos de vehículos==. ***Esto es posible gracias a que en PHP, puedes listar múltiples valores de caso que ejecutarán el mismo bloque de código.***

Este ejemplo ilustra cómo puedes utilizar la sentencia switch para manejar casos más complejos y ejecutar diferentes bloques de código según el valor de una variable.