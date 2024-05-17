# Manipulacion de arreglos

***Documentacion***
(https://www.php.net/manual/es/ref.array.php)

PHP ofrece una variedad de funciones integradas para la manipulación de arreglos que son populares y ampliamente utilizadas en el desarrollo web. Aquí tienes algunas de las funciones más populares:

- **count()**:

Retorna el número de elementos en un arreglo.

```
$comida = array('frutas' => array('naranja', 'plátano', 'manzana'),
                'verduras' => array('zanahoria', 'col', 'guisante'));

// Cuenta recursiva
echo count($comida, COUNT_RECURSIVE)."\n"; // muestra 8

// Almacenadno en una variable el total de elementos
$totalelementos = count($comida, COUNT_RECURSIVE);
echo $totalelementos."\n";

// Cuenta normal
echo count($comida) . "\n"; // muestra 2

// -----  Ejemplo con arreglo unidimensional

$mi_arreglo = [1,2,3,4,5,6];
$total_numeros = count($mi_arreglo);
echo count($mi_arreglo)."\n";
echo $total_numeros."\n";

```

- **array_push()**: 

Agrega uno o más elementos al final de un arreglo.

`array_push($mi_arreglo, "nuevo elemento");`

```
$mi_arreglo = array(1,2,3,4,5,6);


print_r($mi_arreglo);

array_push($mi_arreglo, 22,32,45);
print_r($mi_arreglo);

array_push($mi_arreglo, 12,13,56);
print_r($mi_arreglo);

var_dump($mi_arreglo);
```

```
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 22
    [7] => 32
    [8] => 45
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 22
    [7] => 32
    [8] => 45
    [9] => 12
    [10] => 13
    [11] => 56
)
array(12) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(22)
  [7]=>
  int(32)
  [8]=>
  int(45)
  [9]=>
  int(12)
  [10]=>
  int(13)
  [11]=>
  int(56)
}
```
- **is_array()**

La función is_array() en PHP se utiliza para verificar si una variable es un arreglo o no. Retorna true si la variable es un arreglo y false si no lo es.

Aquí tienes un ejemplo de cómo se utiliza:

```
$mi_variable = array(1, 2, 3, 4, 5);

if (is_array($mi_variable)) {
    echo "La variable es un arreglo.";
} else {
    echo "La variable no es un arreglo.";
}
```
En este ejemplo, si `$mi_variable` es un arreglo, el mensaje "La variable es un arreglo." será impreso en pantalla. De lo contrario, el mensaje "La variable no es un arreglo." será impreso.

Esta función es útil cuando necesitas asegurarte de que una variable sea un arreglo antes de realizar operaciones específicas con ella, como iterar sobre sus elementos o aplicar funciones de manipulación de arreglos. Esto ayuda a evitar errores o comportamientos inesperados en tu código.

- **Funcion explode()**

La función explode() en PHP se utiliza para dividir una cadena de texto en partes más pequeñas, basándose en un delimitador especificado. Retorna un arreglo que contiene las partes resultantes de la división.

La sintaxis básica de explode() es la siguiente:

`$array_resultante = explode($delimitador, $cadena);`
Donde:
`$delimitador` es el carácter o la cadena de texto que se utiliza como punto de división.
`$cadena` es la cadena de texto que se va a dividir.
Por ejemplo:

```
$cadena = "Hola,mundo,de,PHP";
$partes = explode(",", $cadena);
print_r($partes);
```
Este código imprimirá:
```
Array
(
    [0] => Hola
    [1] => mundo
    [2] => de
    [3] => PHP
)

```

En este caso, la función explode() divide la cadena $cadena en partes utilizando la coma , como delimitador. Cada palabra separada por comas se convierte en un elemento del arreglo $partes.

explode() es útil cuando necesitas dividir una cadena de texto en partes más pequeñas para procesarlas o manipularlas por separado. Se utiliza comúnmente en la manipulación de datos CSV, en la extracción de partes específicas de una cadena, o en la separación de elementos en formatos de texto estructurados.

***Otro ejemplo de funcion explode ()***

Este código utiliza la función explode() para dividir la cadena $datos en partes más pequeñas, utilizando el caracter : como delimitador. Luego, asigna cada parte resultante a una variable individual utilizando la función list() de PHP.

```
$datos = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $datos);
echo $user; // foo
echo $pass; // *
```

1. Se define la cadena de texto `$datos`, que contiene información separada por dos puntos (:) en el formato `usuario:contraseña:uid:gid:gecos:directorio_inicial:shell` 
    
    `$datos = "foo:*:1023:1000::/home/foo:/bin/sh";`
<br>

2. Se utiliza la función `explode()` para dividir la cadena `$datos` en partes más pequeñas, utilizando : como delimitador. Esto crea un arreglo `$datos_divididos` que contiene cada parte como un elemento separado.

    `$datos_divididos = explode(":", $datos);`
<br>

3. Se utiliza la función `list()` para asignar cada elemento del arreglo `$datos_divididos` a una variable individual. El orden de las variables asignadas corresponde al orden de los elementos en el arreglo.
    
    `list($user, $pass, $uid, $gid, $gecos, $home, $shell) = $datos_divididos;`
<br>

Después de esta línea, cada variable` $user`, `$pass`, `$uid`, `$gid`, `$gecos`, `$home`, `$shell` contiene un valor correspondiente de la cadena `$datos`.

4.Finalmente, se imprime el valor de las variables `$user` y `$pass`.

```
echo $user; // Imprime 'foo'
echo $pass; // Imprime '*'
```

En resumen, este código toma una cadena de datos separada por dos puntos, la divide en partes utilizando `explode()`, asigna cada parte a una variable individual utilizando `list()`, y luego imprime dos de las variables resultantes. Esto es útil cuando se necesita procesar datos estructurados en un formato específico y se quiere acceder a cada parte de manera individual.

- **Funcion implode()**

La función implode() en PHP se utiliza para combinar los elementos de un arreglo en una sola cadena de texto, utilizando un separador específico entre cada elemento. Esta función es el opuesto inverso de explode(), que divide una cadena en un arreglo.

La sintaxis básica de implode() es la siguiente:

`$cadena_resultante = implode($separador, $arreglo);`

Donde:

**`$separador`** es el carácter o la cadena de texto que se utilizará como separador entre cada elemento del arreglo.
**`$arreglo`** es el arreglo cuyos elementos se combinarán en una cadena.
Por ejemplo:
```
$arreglo = array("Hola", "mundo", "de", "PHP");
$cadena = implode(" ", $arreglo);
echo $cadena;

//Hola mundo de PHP
```
En este caso, la función `implode()` combina los elementos del arreglo $arreglo en una cadena de texto, utilizando un espacio como separador entre cada elemento.

***Otro ejemplo***

```
$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"

// Devuelve un string vacío si se usa un array vacío:
var_dump(implode('hello', [])); // string(0) ""

// El separador es opcional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
```

`implode()` es útil cuando necesitas convertir un arreglo en una cadena de texto para su visualización o para su uso en un contexto donde se requiere una cadena. Se utiliza comúnmente para formatear salidas de datos, generar consultas SQL dinámicas, o construir URLs y rutas en aplicaciones web.


- **array_pop()**: 

Elimina y retorna el último elemento de un arreglo.

`$ultimo_elemento = array_pop($mi_arreglo);`

- **array_shift()**: 

Elimina y retorna el primer elemento de un arreglo.

`$primer_elemento = array_shift($mi_arreglo);`

- **array_unshift()**

Agrega uno o más elementos al principio de un arreglo.

`array_unshift($mi_arreglo, "nuevo elemento");`

- **array_merge()**

Combina dos o más arreglos en uno solo.

`$nuevo_arreglo = array_merge($arreglo1, $arreglo2);`

- **array_slice()**

Retorna una porción de un arreglo.

`$porcion_arreglo = array_slice($mi_arreglo, $inicio, $longitud);`

- **array_key_exists()**

Verifica si una clave existe en un arreglo.
```
if (array_key_exists('clave', $mi_arreglo)) {
    // La clave existe
}
```

- **in_array()**

Verifica si un valor existe en un arreglo.

```
if (in_array('valor', $mi_arreglo)) {
    // El valor existe
}
```

- **array_search()**

Busca un valor en un arreglo y retorna su clave correspondiente.

`$clave = array_search('valor', $mi_arreglo);`