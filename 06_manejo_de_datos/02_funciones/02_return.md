# Return

El uso de return en las funciones de PHP es crucial para controlar el flujo de ejecución y obtener valores de las funciones.

# Definición y uso básico de return

La declaración return en PHP finaliza la ejecución de una función y opcionalmente devuelve un valor al contexto desde el cual se llamó la función.

- **Ejemplo basico**

```
function suma($a, $b) {
    return $a + $b;
}

$resultado = suma(3, 4);
echo $resultado; // Imprime 7
```

### Detalles importantes sobre return

1. Terminación de la función: Al ejecutar return, la función se termina inmediatamente. Cualquier código después de la declaración return no se ejecutará.

```
function ejemplo() {
    echo "Antes del return.";
    return;
    echo "Esto no se ejecutará.";
}

ejemplo(); // Imprime "Antes del return."
```

2. Valor de retorno: Una función puede devolver cualquier tipo de dato, incluyendo arrays y objetos.

```
function obtenerArray() {
    return [1, 2, 3];
}

$array = obtenerArray();
print_r($array); // Imprime Array ( [0] => 1 [1] => 2 [2] => 3 )
```

3. Funciones sin valor de retorno: Si no se especifica un valor de retorno, la función devolverá NULL por defecto.

```
function sinRetorno() {
    echo "Hola";
}

$resultado = sinRetorno(); // Imprime "Hola"
var_dump($resultado); // Imprime NULL
```

# Retornar mas de u valor de una funcion

En PHP, una función no puede devolver directamente múltiples valores como en algunos otros lenguajes de programación. Sin embargo, existen varias maneras de lograr este comportamiento utilizando arrays, listas (list), o incluso objetos. 

1. Retornar un array

La forma más común de retornar múltiples valores es utilizando un array. Puedes almacenar los valores en un array y retornarlo.

```
function obtenerValores() {
    $valor1 = "Hola";
    $valor2 = "Mundo";
    return [$valor1, $valor2];
}

$resultado = obtenerValores();
echo $resultado[0]; // Imprime "Hola"
echo $resultado[1]; // Imprime "Mundo"
```

2. Retornar un array asociativo
Otra forma es retornar un array asociativo para que los valores sean más descriptivos.

```
function obtenerValores() {
    $valor1 = "Hola";
    $valor2 = "Mundo";
    return [
        'primero' => $valor1,
        'segundo' => $valor2
    ];
}

$resultado = obtenerValores();
echo $resultado['primero']; // Imprime "Hola"
echo $resultado['segundo']; // Imprime "Mundo"
```

3. Usar list para asignar los valores retornados
Puedes usar la estructura list para asignar los valores retornados de un array a variables individuales.

```
function obtenerValores() {
    $valor1 = "Hola";
    $valor2 = "Mundo";
    return [$valor1, $valor2];
}

list($primero, $segundo) = obtenerValores();
echo $primero; // Imprime "Hola"
echo $segundo; // Imprime "Mundo"
```
4. Retornar un objeto
También puedes retornar un objeto, especialmente si los valores están relacionados entre sí y representan una entidad más compleja.

```
class Resultado {
    public $primero;
    public $segundo;
    
    public function __construct($primero, $segundo) {
        $this->primero = $primero;
        $this->segundo = $segundo;
    }
}

function obtenerValores() {
    $valor1 = "Hola";
    $valor2 = "Mundo";
    return new Resultado($valor1, $valor2);
}

$resultado = obtenerValores();
echo $resultado->primero; // Imprime "Hola"
echo $resultado->segundo; // Imprime "Mundo"
```