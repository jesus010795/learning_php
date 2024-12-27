# metodo index()
Muestra la lista de todos los recursos.

1. `fetchAll()` sin especificar el tipo de fetch:

- Consulta: `SELECT * FROM withdrawals`
- Explicación: Esta consulta selecciona todas las columnas de la tabla withdrawals.
- `fetchAll()`: Este método recupera todos los registros de la consulta y los devuelve como un arreglo asociativo. Cada elemento del arreglo es un arreglo asociativo que representa una fila de la tabla, donde las claves son los nombres de las columnas.
- Iteración: El código itera sobre el arreglo de resultados y muestra el monto y la descripción de cada retiro.
```
public function index(){
    
    // ------- FETCH DE TODAS LAS COLUMNAS
    $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
    $stmt->execute();
    $resuts = $stmt->fetchAll();

    foreach ($resuts as $result) {
        echo "Gastaste {$result['amount']} en {$result['description']} <br>";
    }
}
```


2. `fetchAll()` con `PDO::FETCH_COLUMN`:

- Consulta: `SELECT amount, description FROM withdrawals`
- Explicación: Esta consulta selecciona solo las columnas amount y description de la tabla.
- `fetchAll(PDO::FETCH_COLUMN, 0)`:
    - Este método también recupera todos los registros de la consulta.
    - El argumento PDO::FETCH_COLUMN indica que se desea recuperar solo una columna específica.
    - El segundo argumento, 0, especifica que se desea recuperar la primera columna seleccionada en la consulta (amount).
- Resultado: El método `fetchAll()` devuelve un arreglo unidimensional que contiene solo los valores de la columna amount.
- Iteración: El código itera sobre este arreglo y muestra el monto de cada retiro.

```
public function index(){
// ------- FETCH DE UNA COLUMNA EN ESPECIFICO
    $stmt = $this->connection->prepare("
            SELECT amount, description FROM withdrawals"
        );
    $stmt->execute(); 
    $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
    // print_r($results);
    foreach ($results as $r) {
        echo "Gastaste $r pesos \n";
    }
        
}
```

## Agregando bindColumn



```
public function index(){
    
    // ------- FETCH DE TODAS LAS COLUMNAS
    $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
    $stmt->execute();
    $resuts = $stmt->fetchAll();

    foreach ($resuts as $result) {
        echo "Gastaste {$result['amount']} en {$result['description']} <br>";
    }
}
```
1. Uso de bindColumn:

- `bindColumn` vincula una columna de los resultados de la consulta a una variable PHP. Esto significa que cada vez que se llama a `fetch()`, el valor de la columna correspondiente se asigna automáticamente a la variable vinculada.
- Al utilizar `bindColumn`, evitamos tener que acceder a los valores de las columnas mediante índices numéricos o nombres, lo que hace el código más legible y menos propenso a errores.

2. Iteración con while:

- El bucle `while` es más eficiente que un foreach en este caso, ya que evita crear un arreglo intermedio para almacenar todos los resultados.
- Cada vez que se llama a `fetch()`, se obtiene el siguiente registro y las variables vinculadas se actualizan automáticamente.


```
public function index(){
    $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
    $stmt->execute();

    $stmt->bindColumn("amount", $amount);
    $stmt->bindColumn("description", $description);

    while($row = $stmt->fetch()){
        echo "Gastaste $amount en $description \n";
    }
}
```

- Ventajas de esta implementación:

    - Mayor eficiencia: Al seleccionar solo las columnas necesarias y utilizar bindColumn, se reduce la cantidad de datos que se transfieren entre la base de datos y la aplicación.
    - Mejor legibilidad: El código es más fácil de entender, ya que las variables `$amount` y `$description` representan directamente los valores de las columnas correspondientes.
    - Menor riesgo de errores: Al evitar el uso de índices numéricos para acceder a los datos, se reduce la probabilidad de errores causados por cambios en el orden de las columnas en la base de datos.

