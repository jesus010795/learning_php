# Conexion a base de datos por medio de MysQLi

-  Creacion de variables para la conexion a la base de datos. Estas variables en un entorno de produccion deberian estar dentro de un archivo de variables de entorno para evitar que sean accedidas.

```
$server = "localhost";
$database = "finanzas_personales";
$username = "jesus";
$password = "fiona";
```

Existen dos formas de hacer la conexion a la base de datos queson de manera procedural y por medio de POO.

En este ejemplo unicamente se desarrollara por medio de la POO.

```
$mysqli = new mysqli($server, $username, $password, $database);
if ($mysqli->connect_errno){
    die("Fallo la conexion: {$mysqli->connect_error}");
}

//
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);
```