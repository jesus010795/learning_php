# Argumentos

En PHP, una función es un bloque de código que puede ser llamado repetidamente desde diferentes partes de un programa. Las funciones permiten la reutilización del código y la organización lógica de las tareas.

1. Definición de una función: Para definir una función en PHP, se utiliza la palabra clave function, seguida del nombre de la función, un par de paréntesis (que pueden contener parámetros) y un bloque de código encerrado entre llaves {}.

```
function nombreDeLaFuncion($parametro1, $parametro2) {
    // Código a ejecutar
    $resultado = $parametro1 + $parametro2;
    return $resultado; // Retorna el resultado de la operación
}
```

2. Llamada a una función: Una vez definida, puedes llamar a la función desde cualquier parte de tu código utilizando su nombre seguido de paréntesis, pasando los argumentos necesarios.

```
$resultado = nombreDeLaFuncion(3, 4);
echo $resultado; // Imprime 7
```

3. Parametros y argumentos
    - **Parámetros**: Son variables que se definen en la declaración de la función y actúan como marcadores de posición para los valores que serán pasados a la función.

    - **Argumentos**: Son los valores reales que se pasan a la función cuando se llama.

    ```
    function saludar($nombre) {
    echo "Hola, $nombre!";
    }

    saludar("Jesús"); // Imprime "Hola, Jesús!"
    ```

4. Valor de retorno: Las funciones pueden devolver un valor usando la palabra clave return. Este valor puede ser capturado y usado en otras partes del programa.

```
function sumar($a, $b) {
    return $a + $b;
}

$suma = sumar(10, 20);
echo $suma; // Imprime 30
```

5. Funciones sin parámetros: Las funciones no necesitan tener parámetros y pueden realizar tareas generales.

```
function mostrarFecha() {
    echo date('Y-m-d');
}

mostrarFecha(); // Imprime la fecha actual
```

6. Funciones con valores predeterminados: Los parámetros pueden tener valores predeterminados, los cuales serán usados si no se pasa un argumento correspondiente.

```
function saludar($nombre = "Amigo") {
    echo "Hola, $nombre!";
}

saludar(); // Imprime "Hola, Amigo!"
saludar("Jesús"); // Imprime "Hola, Jesús!"
```
7. Funciones anónimas y de cierre (closures): PHP también soporta funciones anónimas, que no tienen nombre y pueden ser asignadas a variables o pasadas como argumentos.

```
$saludar = function($nombre) {
    return "Hola, $nombre!";
};

echo $saludar("Jesús"); // Imprime "Hola, Jesús!"
```

## Parametros por referencia

En PHP, los parámetros por referencia permiten que una función modifique el valor de una variable fuera de su ámbito. Esto se logra pasando la referencia de la variable, en lugar de una copia de su valor, a la función. Para definir un parámetro por referencia, se antepone el símbolo `&` al nombre del parámetro en la definición de la función.

**Parámetros por valor vs. Parámetros por referencia**

- Parámetro por valor: Se pasa una copia del valor de la variable a la función. Los cambios realizados dentro de la función no afectan a la variable original.
    - **Ejemplo de parametro por valor**

    ```
    function incrementarValor($numero) {
    $numero += 1;
    }

    $miNumero = 5;
    incrementarValor($miNumero);
    echo $miNumero; // Imprime 5
    ```

    En este ejemplo, el valor de `$miNumero` no cambia porque se pasa una copia de su valor a la función `incrementarValor`.

- Parámetro por referencia: Se pasa una referencia a la variable original a la función. Los cambios realizados dentro de la función afectan directamente a la variable original.

    - **Ejemplo de parametro por referencia**

    ```
    function incrementarReferencia(&$numero) {
    $numero += 1;
    }

    $miNumero = 5;
    incrementarReferencia($miNumero);
    echo $miNumero; // Imprime 6
    ```
    En este ejemplo, el valor de `$miNumero` cambia porque se pasa una referencia a la variable a la función incrementarReferencia.

### Ventajas y consideraciones

- **Eficiencia**: Pasar parámetros por referencia puede ser más eficiente para grandes estructuras de datos, ya que se evita la creación de copias innecesarias.
- **Modificación de datos**: Permite que la función modifique directamente las variables externas, lo cual puede ser útil para ciertas operaciones.

### Ejemplo practico de valores por referencia

Un uso común de parámetros por referencia es cuando se necesita modificar un array dentro de una función.

```
function agregarElemento(&$array, $elemento) {
    $array[] = $elemento;
}

$miArray = [1, 2, 3];
agregarElemento($miArray, 4);
print_r($miArray); // Imprime Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
```

En este ejemplo, el array `$miArray` es modificado directamente dentro de la función agregarElemento.

