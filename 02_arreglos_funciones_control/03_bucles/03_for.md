# for

El ciclo for en PHP (y en muchos otros lenguajes de programación) es una estructura de control que permite repetir un bloque de código un número específico de veces. Su sintaxis generalmente sigue este formato:

```
for (inicio; condición; incremento) {
    // Código a ejecutar en cada iteración
}
```

- Inicio: Se ejecuta una vez al principio del ciclo y generalmente se utiliza para inicializar variables de control.

- Condición: Es evaluada antes de cada iteración. Si es verdadera, el bloque de código dentro del ciclo se ejecuta. Si es falsa, el ciclo termina.

- Incremento: Se ejecuta al final de cada iteración y generalmente se utiliza para actualizar las variables de control.

Por ejemplo, el siguiente código muestra un ciclo for que imprime los números del 1 al 5:

```
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
```

Aquí, `$i = 1 `inicializa la variable de control `$i` a 1,` $i <= 5` es la condición que indica que el ciclo continuará mientras `$i` sea menor o igual a 5, y `$i++` incrementa `$i` en 1 en cada iteración. Por lo tanto, este ciclo imprimirá los números del 1 al 5.

***Otro ejemplo***

```
echo "<table border='1'>";
echo "<tr><th></th>";

// Encabezado de la tabla (números del 1 al 10)
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Contenido de la tabla (multiplicación de números del 1 al 10)
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
```


Claro, aquí tienes un ejemplo más complejo que utiliza un ciclo for en PHP para generar una tabla de multiplicar:

```
echo "<table border='1'>";
echo "<tr><th></th>";

// Encabezado de la tabla (números del 1 al 10)
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Contenido de la tabla (multiplicación de números del 1 al 10)
for ($i = 1; $i <= 10; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
```
Este código genera una tabla HTML que muestra la tabla de multiplicar del 1 al 10. Utiliza dos ciclos for anidados:

- El primer ciclo for genera las celdas del encabezado de la tabla (números del 1 al 10).
- El segundo ciclo for genera las filas y columnas restantes de la tabla, mostrando el resultado de la multiplicación entre los números del 1 al 10. 

Cada fila comienza con el número correspondiente y luego muestra los resultados de multiplicar ese número por los números del 1 al 10.
Este ejemplo muestra cómo los ciclos for pueden utilizarse de manera efectiva para generar contenido dinámico en PHP, como tablas de datos o listas.

### Recorriendo arrays

```
$personas = array (
    "Jesus" => array(
        "edad" => 29,
        "ciudad" => "GDL",
    ),
    "Martha" => array(
        "edad" => 28,
        "ciudad" => "GDL",
    ),
    "Adrian" => array(
        "edad" => 19,
        "ciudad" => "OAX",
    ),
);
```

```

// Obtenemos las claves del array personas
$keys = array_keys($personas); 


for ($i= 0; $i < count($keys); $i++) {
    
    //Almacenams el nombre de cada elemento
    $nombre = $keys[$i]; 
    var_dump($nombre);

    //Accedemos a los datos dentro del array 
    $datos = $personas[$nombre];
    var_dump($datos);

    echo "$nombre \n";
    
    $dataKeys = array_keys($datos);

    for ($j = 0; $j < count($dataKeys); $j++) { 
        $clave = $dataKeys[$j]; // Obtenemos la clave del dato
        $valor = $datos[$clave]; // Obtenemos el valor del dato

        echo "$clave : $valor \n";
    }
    echo"\n";
}

```

- **`$keys = array_keys($personas);`**

Devuelve todas las claves de la primera dimension dentro de un array multidimensional. En este caso obtendremos todos los nombres y los almacenamos en una variable.
Array_keys retorna los valores dentro de otro array, en este ejemplo nos servira para posteriormente recorrerlo y mostrar todos los datos.


- **`$nombre = $keys[$i];  var_dump($nombre);`**

Dentro del primer bucle for se recorrera lavariable` $keys` que contiene el nombre en crudo de cada array dentro del array `$personas`
```
string(5) "Jesus"
string(6) "Martha"
string(6) "Adrian"
```
En cada recorrido nos arrojara estos resultados.

- **`$datos = $personas[$nombre];`**

En cada iteracion estaremos almacenando toda la data que contienen cada arrary asociado al nombre previamente adquirido.

La variable datos contienen esta estructura por cada iteracion.
```
// datos

array(2) {
  ["edad"]=>
  int(28)
  ["ciudad"]=>
  string(3) "GDL"
}
```

    
- **`$dataKeys = array_keys($datos);`**

Para el segundo bucle alamcenaremos en una variable las claves de cada array dentro de la variable datos, las cuales serian `edad` y `ciudad`
```
// Estructura de data keys

array(2) {
  [0]=>
  string(4) "edad"
  [1]=>
  string(6) "ciudad"
}

```

- **Segundo bucle for**

Se ejecutara un recorrido por cada elemento dentro de data keys

Almacenaremos en una variables las claves correspondientes por cada recorrido y de igual forma por cada valor.
**`$clave = $dataKeys[$j];`**
Esto equiva a  `$dataKeys[0]` y `$dataKeys[1]` arrojandonos cada valor correspondiente a su posicion, `edad` , `ciudad`.  

**`$valor = $datos[$clave];`**
Accedemos a los valores de la clave `$datos['edad']`, `$datos['ciudad']` lo que nos arroja `28` y `GDL`.
Para extraer los datos utilizamos la variable creada dentro del mismo bulcle que hace referencia de manera litreral al elemento.