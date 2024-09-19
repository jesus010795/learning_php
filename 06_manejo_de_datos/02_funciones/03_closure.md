# Funciones anonimas

Una funcion anonima se utiliza en variables que requieren una logica.

Las funciones anónimas en PHP, también conocidas como closures o funciones lambda, son funciones que no tienen un nombre especificado y se utilizan como valores. Estas funciones se pueden asignar a variables, pasar como argumentos a otras funciones, o usar en cualquier contexto en el que se necesiten funciones sin nombre.

- **Definición de funciones anónimas**
Una función anónima se define usando la palabra clave function sin especificar un nombre. Puede aceptar parámetros y tener un cuerpo de función como cualquier otra función.

# pasar una funcion anonima a otra funcion como parametr

- Declaracion de funciones anonimas

Declararemos una variable con necesidad de logica ya que necesitamos que nos retorne un valor mas estructurado. El valor de retorno tiene que ser un valor que no pueda ser declarado de manera directa en una variable.

Esta variables seran funciones anonimas que ejecutaremos dentro de la funcion `greeting`

```

$esp = function($name)
{
    return "Hola $name";
};

$eng = function($name)
{
    return "Hello $name";
};

```
- Declaracion de funcion principal

Al crear nuestra funcion greeting le indicamos que espramos como primer parametro una funcion anonima y otro valor que necesitemos anexar a nuestra logica, en este caso un nombre.

==Esta función actúa como un saludo genérico que puede adaptarse a diferentes idiomas.==

```
function greeting(Closure $lang, $name)
{
    return $lang($name);
}
```

Cuando ejecutamos la funcion pasamos com primer parametro una de las funciones anonimas creadas y como segundo parametro en string que correspondera a un nombre.

## Ventajas de este enfoque:
- Flexibilidad: La función greeting puede utilizarse con cualquier función de saludo, permitiendo agregar más idiomas fácilmente.
- Reutilización: Las funciones anónimas `$esp` y `$eng` pueden reutilizarse en otros contextos.
- Código más limpio: Al separar la lógica del saludo en funciones independientes, el código se vuelve más legible y mantenible.


# closure

Un closure en PHP es una función anónima que puede capturar y utilizar variables del ámbito en el que fue creada. Los closures permiten crear funciones más flexibles y poderosas, ya que pueden acceder a variables que no se encuentran en su propio ámbito local.

- ejemplo sencillo de closure

```
$message = "Hola, Mundo!";

$miClosure = function() use ($message) {
    echo $message;
};

$miClosure(); // Imprime "Hola, Mundo!"
```

En este ejemplo:

- `$message` es una variable definida fuera del closure.
- La palabra clave `use` permite al closure capturar la variable `$message` y usarla dentro de su cuerpo.

