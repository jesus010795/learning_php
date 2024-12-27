# Metodo show
Esta función, llamada `show()`, tiene como propósito recuperar y mostrar los detalles de un retiro específico almacenado en una base de datos.

1. **Preparación de la consulta**:

- **`$stmt = $this->connection->prepare("SELECT * FROM withdrawals WHERE id=:id");`**: Esta línea crea una sentencia SQL preparada. Esto significa que la estructura de la consulta se define de antemano, pero los valores específicos (como el ID del retiro) se insertarán más tarde. El símbolo `:id` es un marcador de posición que será reemplazado por el valor real del ID del retiro.

2. **Ejecución de la consulta**:

- **`$stmt->execute([":id" => $id]);`**: Aquí se ejecuta la consulta preparada. El arreglo` [":id" => $id]` proporciona el valor para el marcador de posición `:id`, que es el ID del retiro que queremos buscar.

3. Obtención del resultado:

- **`$result = $stmt->fetch();`**: Esta línea obtiene el primer registro que coincide con la consulta y lo almacena en la variable `$result`. El resultado será un arreglo asociativo, donde las claves son los nombres de las columnas de la tabla `withdrawals` y los valores son los datos correspondientes a ese registro.

    - `\PDO::FETCH_ASSOC`:devuelve un array indexado por los nombres de las columnas del conjunto de resultados.

4. Impresión del resultado:

- `print_r($result);`: Esta línea imprime el contenido del arreglo `$result` en un formato legible. Esto es útil para depuración, pero en una aplicación real, normalmente se usaría este resultado para mostrarlo al usuario de alguna manera más amigable (por ejemplo, en una página web).

```
public function show($id){
    $stmt = $this->connection->prepare(
        "SELECT * FROM withdrawals WHERE id=:id"
    );

    $stmt->execute([
        ":id" => $id
    ]);

    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    print_r($result);

}
```