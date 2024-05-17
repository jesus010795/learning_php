# Funciones

Las funciones en PHP son bloques de código que realizan una tarea específica y pueden ser reutilizadas en diferentes partes de un programa. Son una parte fundamental de la programación modular, ya que te permiten escribir código una vez y usarlo en múltiples lugares sin tener que repetirlo.

Aquí tienes una explicación básica de cómo funcionan las funciones en PHP:

- Sintaxis básica

    ```
    function nombre_de_la_funcion($parametro1, $parametro2, ...) {
        // Código de la función
        return $resultado; // Opcional
    }
    ```

- `function`: Palabra clave que define que estás creando una función.
- `nombre_de_la_funcion`: El nombre que le das a tu función.
- `$parametro1`, `$parametro2`, ...: Los parámetros que la función puede recibir. Son opcionales.
- `{}`: Encierran el cuerpo de la función, donde está el código que se ejecutará cuando llames a la función.
- `return`: Palabra clave para devolver un valor de la función. Es opcional y puedes devolver cualquier tipo de dato.
- `$resultado`: El valor que devuelve la función, si es que lo hace.


## Parametros

Los parámetros en las funciones de PHP son variables que se utilizan para pasar valores a la función cuando es llamada. Estos valores pueden ser utilizados dentro del cuerpo de la función para realizar operaciones o cálculos.

- Sintaxis de los parámetros:

```
function nombre_de_la_funcion($parametro1, $parametro2, ...) {
    // Código de la función
}
```

- `$parametro1`, `$parametro2`, ...: Son los nombres de los parámetros que la función espera recibir.
- Estos nombres se utilizan dentro del cuerpo de la función para referirse a los valores que se pasan cuando la función es llamada.
- Los parámetros se separan por comas y pueden tener cualquier nombre válido de variable en PHP.
- Los parámetros son opcionales, es decir, una función puede no tener parámetros.

### Pasando argumentos a la función:

Cuando llamas a una función, puedes pasar los valores que deseas que sean asignados a los parámetros de la función. Estos valores se conocen como argumentos.

`nombre_de_la_funcion($valor1, $valor2);`

- `$valor1`,` $valor2`, ...: Son los valores que pasas a la función como argumentos.
- Estos valores se asignarán a los parámetros correspondientes de la función en el orden en que se pasan.

- Ejmplo sencillo

```
function saludar($nombre) {
    echo "¡Hola, $nombre!";
}

// Llamada a la función con un argumento
saludar("Juan"); // Esto imprimirá "¡Hola, Juan!"
```

 - **Ejemplo: ordenart un arrray de numeros**

 ```
 function ordenar_array($array) {
    sort($array);
    return $array;
}

// Uso de la función
$numeros = [4, 2, 7, 1, 5];
$numeros_ordenados = ordenar_array($numeros);
echo "Array ordenado: " . implode(", ", $numeros_ordenados);
 ```

- **Ejemplo: validar un formulario**

```
function validar_formulario($datos) {
    $errores = [];

    // Validar nombre
    if (empty($datos['nombre'])) {
        $errores[] = "El nombre es obligatorio";
    }

    // Validar email
    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no es válido";
    }

    // Más validaciones...

    return $errores;
}

// --- Uso de la función

$formulario = [
    'nombre' => 'Juan',
    'email' => 'correo@example.com',
    // Otros datos del formulario
];

$errores = validar_formulario($formulario);

if (empty($errores)) {
    echo "El formulario es válido. ¡Se puede procesar!";
} else {
    echo "Se encontraron errores en el formulario:";
    foreach ($errores as $error) {
        echo "$error \n";
    }
}
```

En este caso más complejo, creamos una función para validar un formulario. La función toma un array de datos del formulario como parámetro y devuelve un array con los errores encontrados, si los hay.

# Uso de return


El return dentro de una función PHP se utiliza para devolver un valor específico desde la función al punto donde fue llamada. Cuando se encuentra una declaración return dentro de una función, la ejecución de la función se detiene inmediatamente y el valor especificado se devuelve a la llamada de la función.

- Sintaxis

```
function nombre_de_la_funcion($parametro1, $parametro2, ...) {
    // Código de la función
    return $resultado; // Valor que se devolverá
}
```

- `return`: Palabra clave que indica que se devolverá un valor.
- `$resultado`: El valor que se devolverá al punto de llamada de la función. Puede ser cualquier tipo de dato válido en PHP.
<br>

- Ejemplo
```
function suma($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}

// Llamada a la función
$total = suma(5, 3); // La función devuelve 8
echo $total; // Esto imprimirá 8
```

En este ejemplo, la función `suma()` devuelve la suma de los dos números `$a` y `$b`. Cuando la función es llamada con `suma(5, 3)`, devuelve el valor 8, que luego se asigna a la variable` $total`.

## Multiples retornos

Una función puede tener múltiples declaraciones de retorno, pero solo una se ejecutará en el flujo de ejecución. La función terminará su ejecución tan pronto como se encuentre una declaración de retorno.

```
function es_mayor_de_edad($edad) {
    if ($edad >= 18) {
        return true;
    } else {
        return false;
    }
}
```

En este ejemplo, la función `es_mayor_de_edad()` devuelve true si la edad es mayor o igual a 18, y false si no lo es. Una vez que se encuentra un return, la función se detiene y devuelve el valor correspondiente.

- **Otro ejemplo**

```
function obtener_dia_de_la_semana($numero) {
    switch ($numero) {
        case 1:
            return "Lunes";
        case 2:
            return "Martes";
        case 3:
            return "Miércoles";
        case 4:
            return "Jueves";
        case 5:
            return "Viernes";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return "Número de día inválido";
    }
}

// Ejemplos de uso de la función
echo obtener_dia_de_la_semana(1); // Imprimirá "Lunes"
echo obtener_dia_de_la_semana(4); // Imprimirá "Jueves"
echo obtener_dia_de_la_semana(8); // Imprimirá "Número de día inválido"
```

### DOCUMENTACION

[***Funciones arrays***](https://www.php.net/manual/es/ref.array.php)
[***Funciones strings***](https://www.php.net/manual/es/ref.strings.php)
[***Funciones fechas***](https://www.php.net/manual/es/ref.datetime.php)
[***Funciones matematicas***](https://www.php.net/manual/es/ref.math.php)