# Expresiones regulares en php

Las expresiones regulares en PHP son una herramienta poderosa para buscar, validar y manipular cadenas de texto. PHP soporta dos tipos principales de expresiones regulares: **POSIX** y **PCRE** (Perl Compatible Regular Expressions). PCRE es el más comúnmente usado debido a su potencia y flexibilidad.

1. Patrones Basicos
- `/`:  CONTENEDOR
- `^`: INICIO - Coincide con el inicio de una cadena.   
- `$`: FINAL - Coincide con el final de una cadena.
- `-`: RANGO
- `[]`: PATRÓN - Define un conjunto de caracteres, por ejemplo, [abc] coincide con cualquier a, b, o c.
- `{}`: CONDICIÓN - 

- En este ejemplo haremos un validacion sencilla de un password

```
$psw = "123456a";

'/^[0-9]{6-9}$/'

var_dump(preg_match('/^[0-9]{6,9}$/', $psw));
```
- `/ / `Iniciamos con nuestro caracter contenedor en donde establecemos el inciio y el fin
- `^` signo de apertura
- `$` Signo de finalizacion de la expresion regular, es una buena practica que determinemos el inicio y el fin antes de empezar a escribir el contenido de nuestra expresion regular.
- `[0-9]` Establecemos un patron, en este caso indicaremos que recibiremos numeros del 1 al 9
- `{6,9}` Creamos la condicion en donde indicamos que el largo de nuestro cararcter a validar debe superar los 6 caracteres y no sobrepasar de 9.


Al ejecutar un vardump sobre la validacion, nos regresara un 1 si la cadena coincide con todo lo establecido en la expresion y un 0 si no cumple, podemos indicar que nos devuelva valores booleanos de la siguinete manera.

`var_dump((bool) preg_match('/^[1-9]{6,9}$/', $psw));`

## Funcion preg_match

La función `preg_match` en PHP se utiliza para realizar coincidencias de patrones utilizando expresiones regulares. Es una herramienta poderosa para la búsqueda y manipulación de cadenas de texto, permitiendo identificar si una cadena específica coincide con un patrón dado.