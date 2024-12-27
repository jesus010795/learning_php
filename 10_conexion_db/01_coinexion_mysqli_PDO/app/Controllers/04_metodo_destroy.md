# MEtodo destroy

Este metdo se encarda de eliminar un registro de una tabla dentro de una base de datos. La funcion utiliza transacciones par asegurar de que la eliminacion se pueda deshacer si el usuario decide no proceder con la accion.

```
 public function destroy($id){
    $this->connection->beginTransaction();
    
    $stmt = $this->connection->prepare(
        "DELETE FROM incomes WHERE id=:id"
    );
    $stmt->execute([
        ":id" => $id
    ]);

    $response = readline("Quieres ejecutar la eliminacion?: s/n ");
    
    if ($response == "n") {
        $this->connection->rollBack();
    } else {
        $this->connection->commit();
    }
}
```
1. Inicio de la transaccion
    `$this->connection->beginTransaction();`
    Se inicia una transacicion en la base de datos. Esto significa que todos los cambios realizados a la base de datos dentro de estas transaccion nmo se confirmaran hasta que se llame al metodo `commit()` y puede deshacerse si se llama a `rollBack()`.
2. Preparacion de la consulta
    ```
    $stmt = $this->connection->prepare(
            "DELETE FROM incomes WHERE id=:id"
    );
    ```
    Se prepara unaconsulta SQL para eliminar un registro de la tabla `incomes`, donde el id cincide con el valor proporcionado. Se utiliza un marcado de posicion (`:id`) para evitar inyeccion SQL.

3. Ejecucion de la consulta
    ```
    $stmt->execute([
        ":id" => $id
    ]);
    ```
    Se ejecuta la consulta preparada, pasando el valor de $id como parametro. Esto elimina el registro con el `id` especificado en la tabla.
4. Confirmacion del usuario
    Se solicita al usuario que confirme si desea proceder con la eliminacion del registro. y se hace una validacion en donde se decide como proceder en de acuerdo a la respuesta dada por el ususario.

## Refactorizacion

```
public function destroy($id){
    try {
        $this->connection->beginTransaction();
    
        $stmt = $this->connection->prepare(
            "DELETE FROM incomes WHERE id=:id"
        );
        $stmt->execute([
            ":id" => $id
        ]);

        do {
            $response = readline("Quieres ejecutar la eliminacion? (s/n): ");
        } while ($response != "s" && $response != "n");
        
        if ($response === "n") {
            $this->connection->rollBack();
            echo "Sql no ejecutado \n";
        } else {
            $this->connection->commit();
            echo "Eliminacion confirmada \n";

        }
    } catch (\Throwable $th) {
        $this->connection->rollBack();
        echo "Ha ocurrido un error: " . $th->getMessage() . "\n";
    }
    
}
```
1. Gestión de Errores: El bloque `try-catch` asegura que cualquier excepción lanzada durante la transacción se maneje adecuadamente, y `rollBack()` se llamará si ocurre un error.

2. Validación de Entrada: Se utiliza un bucle `do-while` para asegurar que el usuario solo pueda responder "s" o "n".

3. Mensajes Informativos: Se proporcionan mensajes al usuario para confirmar la acción tomada.