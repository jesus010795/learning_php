# Ejecutando consultas por medio de PDO

El código de acontinuacion tiene como objetivo registrar una nueva entrada en la base de datos para controlar retiros (withdrawals). Vamos a dividir la explicación en dos partes principales: el archivo index.php y la clase WithdrawalsController.

1. index.php

Este archivo es el punto de entrada de nuestro código. Aquí es donde se crea una instancia de la clase `WithdrawalsController` y se llama a su método `store` para guardar un retiro en la base de datos.

- Instanciar el controlador de retiros: Se crea una nueva instancia de la clase WithdrawalsController.
- Se llama al método store del controlador, pasando un arreglo asociativo con los detalles del retiro:
    - `:payment_method`: Tipo de método de pago (tarjeta de crédito).
    - `:type`: Tipo de retiro (compra).
    - `:date`: Fecha y hora actual.
    - `:amount`: Monto del retiro (450).
    - `:description`: Descripción del retiro ("Compre comida para michis").


```
$withdrawal_controler = new WithdrawalsController();
$withdrawal_controler->store([
    ":payment_method" => PaymentMethodTypeEnum::CreditCard->value,
    ":type" => WithdrawalTypeEnum::Purchase->value,
    ":date" => date("Y-m-d H:i:s"),
    ":amount" => 450,
    ":description" => "Compre comida para michis",
]);
```

2. Clase WithdrawalsController

Esta clase maneja las operaciones relacionadas con los retiros, como la creación y el almacenamiento en la base de datos.

- Método store: Este método se encarga de almacenar los detalles del retiro en la base de datos.
- Obtener conexión a la base de datos: Se obtiene una instancia de la conexión a la base de datos usando un patrón singleton.
- Preparar la consulta SQL: Se prepara una declaración SQL para insertar los datos en la tabla withdrawals.
- Ejecutar la consulta: Se ejecuta la declaración preparada con los datos proporcionados en el arreglo $data.

```
public function store($data) {
    $connection = Connection::get_instance()->get_database_instance();
    $stmt = $connection->prepare(
        "INSERT INTO withdrawals (payment_method, type, date, amount, description)
        VALUES ( :payment_method, :type, :date, :amount, :description)"
    );

    $stmt->execute($data);    
}
```

### Utilizacion de points holders

En PHP, el término "point holder" no es un concepto estándar ni ampliamente reconocido en el contexto de la programación o desarrollo web. Sin embargo, dependiendo del contexto en el que se use, podría interpretarse de diferentes maneras. 

En nuestro ejemplo actual, lo utilizamos para las consultas sql.

- Marcador de Lugar para Puntos (Placeholders): En el contexto de bases de datos y consultas SQL, un "placeholder" es un marcador que se utiliza en las consultas preparadas para indicar dónde se deben insertar los valores de manera segura. Esto ayuda a prevenir ataques de inyección SQL.

    - Ejemplo:
        ```
        $stmt = $connection->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute([
            ':name' => 'John Doe',
            ':email' => 'john@example.com'
        ]);
        ```

        En este ejemplo, `:name` y `:email` son placeholders.