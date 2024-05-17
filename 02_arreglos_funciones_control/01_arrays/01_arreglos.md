# Arreglos
Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector), tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más. Ya que los valores de un array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales.

## Arreglos Indexados Numéricamente 

En este tipo de arreglo, cada elemento tiene un índice numérico único que comienza desde cero y aumenta secuencialmente. Se accede a los elementos utilizando estos índices.

```
$numeros = array(10, 20, 30, 40);
echo $numeros[0]; // imprime 10
```

## Arreglos Asociativos

Los arreglos asociativos en PHP son una estructura de datos donde cada elemento está asociado con una clave o identificador único en lugar de un índice numérico como en los arreglos indexados numéricamente. Estas claves pueden ser cadenas de texto o números, y se utilizan para acceder a los valores asociados en el arreglo.

Aquí hay algunas características importantes de los arreglos asociativos en PHP:

- **Claves y valores** 

Cada elemento en un arreglo asociativo consta de una clave y un valor. La clave es el identificador único que se utiliza para acceder al valor asociado.

`$persona = array("nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid");`

En este ejemplo, "nombre", "edad" y "ciudad" son las claves, y "Juan", 25 y "Madrid" son los valores asociados.

- **Acceso a elementos**

Se accede a los elementos de un arreglo asociativo utilizando la sintaxis de corchetes `[]` o la función `array_key_exists()`.

`echo $persona["nombre"]; // imprime Juan`

En este ejemplo, `$persona["nombre"]` accede al valor asociado con la clave "nombre" en el arreglo `$persona`, que es "Juan".

- **Interpolando arreglos en string**

Para interpolar el acceso a un arreglo dentro de una cadena de texto en PHP, puedes utilizar la sintaxis de llaves {} para incluir la expresión de acceso al arreglo dentro de la cadena. Esto te permite acceder al valor del arreglo y concatenarlo directamente dentro del texto.

```
$persona = array("nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid");

// Interpolación del acceso a un arreglo dentro de una cadena de texto
echo "Nombre: {$persona['nombre']}, Edad: {$persona['edad']}, Ciudad: {$persona['ciudad']}";
```

En este ejemplo, {} se utiliza para encerrar la expresión de acceso al arreglo `($persona['nombre'], $persona['edad'], $persona['ciudad'])` dentro de la cadena de texto. Esto permite que PHP interprete la expresión y sustituya los valores del arreglo correspondientes dentro del texto.

El resultado seria algo asi:

`Nombre: Juan, Edad: 25, Ciudad: Madrid`

Esta es una forma conveniente y legible de incluir valores de arreglo dentro de cadenas de texto en PHP, especialmente cuando necesitas combinar texto fijo con datos dinámicos almacenados en un arreglo.

- **Agregar y modificar elementos**

Puedes agregar nuevos elementos o modificar los existentes en un arreglo asociativo asignando un valor a una clave específica.

```
$persona["apellido"] = "Gómez";
$persona["edad"] = 26;
```

Esto agrega un nuevo elemento con la clave "apellido" y el valor "Gómez", y modifica el valor asociado con la clave "edad" a 26.

- **Eliminar elementos**
Puedes eliminar elementos de un arreglo asociativo utilizando la palabra clave unset().

`unset($persona["ciudad"]);`

Esto eliminará el elemento con la clave "ciudad" del arreglo $persona.

- **Recorrido del arreglo** 

Puedes recorrer un arreglo asociativo utilizando bucles como foreach.

```
foreach ($persona as $clave => $valor) {
    echo "Clave: $clave, Valor: $valor <br>";
}
```

Este bucle recorre cada elemento del arreglo $persona, donde $clave representa la clave y $valor representa el valor asociado en cada iteración.

## Arreglos multidimensionales

Los arreglos multidimensionales en PHP son arreglos que contienen otros arreglos como elementos. Esto permite organizar los datos de manera más estructurada y jerárquica, lo que puede ser útil para representar información compleja, como tablas bidimensionales o estructuras de árbol.

En PHP, puedes crear arreglos multidimensionales fácilmente. Aquí tienes un ejemplo:

```
$alumnos = array(
    array("nombre" => "Ana", "edad" => 20),
    array("nombre" => "Pedro", "edad" => 22),
    array("nombre" => "María", "edad" => 21)
);
echo $alumnos[0]["nombre"]; // imprime Ana

```

En este ejemplo, `$alumnos` es un arreglo multidimensional que contiene tres arreglos anidados, cada uno representando los datos de un alumno. Cada arreglo interno tiene claves como "nombre" y "edad" para representar diferentes aspectos de la información del alumno.

Para acceder a los elementos de un arreglo multidimensional, puedes utilizar múltiples índices o claves. Por ejemplo:

```
echo $alumnos[0]["nombre"]; // Imprime el nombre del primer alumno (Ana)
echo $alumnos[1]["edad"];   // Imprime la edad del segundo alumno (22)
```

Además, puedes iterar sobre un arreglo multidimensional utilizando bucles anidados. Por ejemplo, puedes usar un bucle foreach dentro de otro bucle foreach para recorrer todos los elementos del arreglo:

```
foreach ($alumnos as $alumno) {
    foreach ($alumno as $clave => $valor) {
        echo "$clave: $valor, ";
    }
    echo "<br>";
}
```

- **Otro ejemplo**

Este arreglo $personas es un arreglo asociativo multidimensional en PHP. Contiene tres elementos, donde cada elemento tiene una clave (nombre de la persona) y un valor asociado (otro arreglo que contiene la edad y la ciudad de la persona).

Para acceder a los valores y recorrer este arreglo, puedes utilizar bucles foreach anidados.

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

// Acceder a los valores
echo "La edad de Jesús es: " . $personas["Jesus"]["edad"]; // Imprime 29
echo "La ciudad de Adrián es: " . $personas["Adrian"]["ciudad"]; // Imprime OAX

// Recorrer el arreglo
foreach ($personas as $nombre => $datos) {
    echo "Nombre: $nombre <br>";
    foreach ($datos as $clave => $valor) {
        echo "$clave: $valor <br>";
    }
    echo "<br>";
}

```

En este ejemplo, el primer bucle foreach recorre el arreglo $personas y obtiene cada par clave-valor, donde la clave es el nombre de la persona y el valor es otro arreglo que contiene la edad y la ciudad.

Dentro de este bucle, otro bucle foreach recorre el arreglo interno $datos, que contiene la edad y la ciudad de la persona. Dentro de este bucle, imprimimos cada clave y valor para mostrar los detalles de cada persona.

El resultado sería algo así:

```
Nombre: Jesus
edad: 29
ciudad: GDL

Nombre: Martha
edad: 28
ciudad: GDL

Nombre: Adrian
edad: 19
ciudad: OAX
```

```
// --- Accediendo a cada valor con llaves interpoladas

echo "La edad de Jesus es: {$personas['Jesus']['edad']} \n";
echo "La edad de Adrian es: {$personas['Adrian']['edad']} \n";

// La edad de Jesus es: 29 
// La edad de Adrian es: 19
```

- **Comparativa con python**

```
personas = {
    "Jesus": {
        "edad": 29,
        "ciudad": "GDL"
    },
    "Adrian": {
        "edad": 19,
        "ciudad": "OAX"
    },
}


for persona, detalles in personas.items():
    print(f"Nombre: {persona} \n")
    for clave, valor in detalles.items():
        print(clave, valor)

Nombre: Jesus 
edad: 29 
ciudad: GDL 
Nombre: Martha 
edad: 28 
ciudad: GDL 
Nombre: Adrian 
edad: 19 
ciudad: OAX 
```