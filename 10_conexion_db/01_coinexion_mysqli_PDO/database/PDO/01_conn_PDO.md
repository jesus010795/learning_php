# PDO

*Php data objects* es un conjunto de clase sque permite interactuar con diferentes bases de datos utilizando una misma interfaz, ademas tiene como ventaja que puede tratar los datos como objetos lo que lo hace sencillo y entendible para trabajar.

### Conexion con PDO

El primer paso para interactuar con bases de datos es la conexion, para ello utilizaremos la clase PDO que tiene los siguientes parametros.

`$pdo = new PDO($dsn, $username, $password, $options);`

- `$dsn` : *(data source name)* cadena de texto qeu especifica la fuente de datos.
- `$username` : Nombre de usuario de la base de datos.
- `$password` : clave de usuario de la base de datos,
- `$options` : array con parametros adicionales para la conexion.

Para el caso de DSN se tiene la siguiente estructura.

`$dsn = 'mysql:host=DBHOST;port=DBPORT;dbname=DBNAME'`

En donde:
- `mysql`: Especifica el dirver de base de datos a utilizar, ne este caso Mysql
- `DBHOST` : Define el hostname o ip del servidor de base de datos.
- `DBPORT` : El puerto para la conexion, en MYSQL el puerto por defecto es 3306.
- `DBNAME` : Nombre de base de datos a utializar.

#### Ejemplo de conexion.

```
$server = "localhost";
$database = "finanzas_personales";
$username = "jesus";
$password = "fiona";

$dsn = "mysql:host=$server;dbname=$database";

$connection = new PDO($dsn, $username, $password);

$statement = $connection->prepare("SET NAMES 'utf8'");
$statement->execute();

var_dump($statement);
```