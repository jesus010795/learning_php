<?php

// Valores
function greet ($name)    
{
    return "Hola $name";
}


echo greet("Jesus");

//Referencias

// En este ejemplo se modificara el valor de la variable que se encuentra fuera del scope de la funcion por medio de los argumentos/parametro por referencia.

echo "<br>";

$course = "PHP";

function patch(&$course)
{
    $course = "Laravel";
    echo $course;
    echo "<br>";

}

echo $course;
echo "<br>";
patch($course);
echo $course;


// Predeterminado
// Dejamos un valor predeterminado con argumento
//Al momento de ejecutar la fucnion si no se pasa ningun prametro, nos devolvera el valor predeterminado


function say_hello($name = "Jesus")
{
    echo "<br> Hola, $name <br>";
}

say_hello();
say_hello("Anahi");

?>