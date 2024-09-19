<?php

/**
 * Una funcion anonima en PHP es una variable que requiere logica
 * No solamente retornamos un valor, requerimo que esta variable 
 * contenga mas logica y que procese de diferentes maneras el parametro
 * 
 * Al estar tratando con una variable, tenemos que colocar el ";"
 */
$greet = function ($name)
{
    return "Hola $name";
};

echo $greet("Jesus");


// Crearemos una Funcion y le indicaremos que recibe como parametro 
//una funcion anonima

/**
 * Undocumented function
 *
 * @param Closure $lang: Es una función anónima (closure) que se encargará de generar el saludo en un idioma específico.
 * @param [type] $name: Es el nombre de la persona a la que se saludará.
 * @return void: Devuelve el resultado de ejecutar la función $lang con el nombre proporcionado.
 */

function greeting(Closure $lang, $name)
{
    return $lang($name);
}


$esp = function($name)
{
    return "Hola $name";
};

$eng = function($name)
{
    return "Hello $name";
};

echo greeting($eng, "Jesus");




?>