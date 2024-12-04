# Sesiones

las sesiones en php son una forma de almacenar datos de ususrio en el servidor para ser utilizados en multiples paginas. A diferencia de las cookies que se alamacenan en el navegador del cliente, los datos de sesiones se almacenan en el servidor, lo que proprciona una mayor seguridad y capacidad de almacenamiento.

## Como funcionan las sesiones en PHP

1. Inicio de la sesion utilizando la funcion `session_start()`. Esto debe hacerse al comienzo del script, antes de cualquier salida HTML.
2. Asignacion de valores: Los datos se alamcenan en una variable global `$_SESSION` que es un array asociativo.
3. Recuperacion de valores: Los valores almacenados en `$_SESSION` pueden ser accedidos en cualquier pagina que haya iniciado sesion.
4. Destruccion de la sesion: Se puede destruir una sesion para finalizar la misma y eliminar todos los datos asociados.

## Ejemplo realizado en clase

Para este ejemplo crearemos 3 archivos, un index. php, un loggin.php y un logout.php

- **index.php** Recuperacion de valores.

Este archivo nos mostrara informacon dependiendo de que, si la session ha sido inciada o no, literal es una simple validacion del usuario.

Al principio del archivo declaramos la funcion `session_start()` la cual se "comunicara" con la session global declarada en el archivo que contenga la asignacion de las diferentes variables a la variable `$_SESION`. En esta seccion ocurrira la recuperacion de valores, dichos valores se asignaran el archivo de loggin.

```
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>

<?php if (isset($_SESSION["id"])): ?>
    <h1>Bienvenido <?=$_SESSION["username"] ?> </h1>
    <h2>Tu email es: <?= $_SESSION["email"]?></h2>
<?php else: ?>
    <h1>No estas logueado </h1>
<?php endif; ?>
    
</body>
</html>
```

- **loggin.php**

    - **`session_start();`** : Funcion que indica que se comenzara a trabajar con sessiones.
    - **`$users`**: Creamos un array de ususarios que simulara nuestra conexuion a una base de datos de donde extraeremos los usuarios o usuario con el cual se trabajra en la sesion.
    - **`$user = $_GET["user"] ?? "";`**: Obtendremos el valor de la variable user por medio de un paramaetro enviado desde la url, y con el metodo Get recuperaremos este valor, el cual correspondera a la posicion del usuario con el que se trabajara (0, 1).
    - **Asingancion de valores a la variable SESSION**
        - `$_SESSION["id"] = $user;`
        - `$_SESSION["username"] = $users[$user]["username"];`
        - `$_SESSION["email"] = $users[$user]["email"];`


```
<?php
session_start();

$users = [

    array(
        "username" => "MisterMichi",
        "email" => "elmister@michis.com"
    ),

    array(
        "username" => "Michiman",
        "email" => "michi@man.com"
    ),

];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
```

- **`logout.php`**

Finalmente destruimos la session, para esto es necesario indicar que se ha iniciado session ppor medio de la funcion `session_start()` y psteriormente ejecutar `session_destroy()`

```
<?php
session_start();
session_destroy();

?>
<h1>Sesion finalizada</h1>
```

>Todos los archivos interactuan por medio de la funcion `session_start()` la cual es ejecutada una vez se indique la asignacion de valores a la variable `$_SESION`.