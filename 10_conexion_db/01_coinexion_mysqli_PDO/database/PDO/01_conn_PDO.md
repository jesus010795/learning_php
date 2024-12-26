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

## Refactorizacion de conexion por medio de POO

A continuacion se creara una clase para la conexion a la base de datos y ademas se implementara el patron de diseno Singleton

1. Se crearan las propiedades `$instance`, que contendra una instancia unica de esta clase, y `$connection` que mantendra la conexion a la base de datos.
2. Se crea el constructor privado para evitar la creacion directa de instancias desde fuera de la clase, y este unicamente manda a ejecutar el metodo `make_connection()`
3. Metodo estatico `get_instance()`, asegura que solo haya una instancia de la clase `Connection`. Si no existe una instancia, la crea.
4. Metodo `make_connection`: Este metodo privado establece la conexiona a la base de datos utilizando PDO. Si ocurre un error, captura la excepcion y muestra un mensaje de error.
5. Metodo `get_database_instance()`: Devuelve la conexion a la base de datos.

```
namespace Database\PDO;

class Connection {

    private static $instance;
    private $connection;

    private function __construct()
    {
        $this->make_connection();
    }

    public static function get_instance($instance){
        if(! self::$instance instanceof self){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function make_connection(){
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "jesus";
        $password = "fiona";
        $dsn = "mysql:host=$server;dbname=$database";
        
        try{
            $conn = new \PDO($dsn, $username, $password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare("SET NAMES 'utf8'");
            $statement->execute();
        }
        catch(\PDOException $e){
            echo "La conexión ha fallado: " . $e->getMessage();
        }

        $this->connection = $conn;
    }

    public function get_database_instance(){
        return $this->connection;
    }


}
```

## Inclyendo el namespace en composer

A continuacion tenemos que hacer que composer reconozca a esta clase para que la cargue de manera automatica.

Para esto se agrega un namespace para organiazar mejor el codigo y evitar colisiones de nombres con otras clases.
`namespace Database\PDO;`

- Modificacion de `composer.json`
    - Agregamos la autocarga de archivo dentro de la propiedad autoload
    - `psr-4`: Es una especificación para la auto carga de clases desde la ruta de los archivos. Describe dónde se encuentran ubicados los archivos que serán autocargados. en este caso, el nombre del namspace y la carpeta en donde se buscaran los archivos.
    - A continuacion se nos mostrara un error ya que php asume que dentro de este archivo existe otra clase llama PDO y entra en conflicto con el namespace, entonces tenemos que agregar una diagonal invertida indicando que estamos ocupando el namespace global.  `$conn = new \PDO($dsn, $username, $password);`

```
{
    "name": "jesus/01_coinexion_mysqli",
    "description": "Proyecto del curso de conexion de php a bases de datos",
    "type": "project",
    "license": "MIT",
    "authors": [
        {
            "name": "jesus",
            "email": "jcd010795@gmail.com"
        }
    ],
    "autoload":{
        "psr-4":{
            "Database": "database/"
        }
    },
    "require": {}
}

```

