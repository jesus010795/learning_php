# Cookies

las cookies son pequenos archios de texto que los sitios web almacenan en el navegador de un ususario mientras navega por la web. Estas cookies tienen varios propositos y pueden contener informacion diversa, desdec onfiguraciones del sitio hasta datos de autenticacion.

## Tipos de cookies

- Cookies de sesion:

    Temporales y se eliminan cuando el usuario cierra el navegador. don utiles para la autenticacion durante la sesion de navegacion.

- Cookies persistentes: 
    
    Permanecen en el dispositivo del usuario durante un periodo determinado o hasta qe el ususario las elimine manualmente. Se utilizan para recordar informacion y configuraciones en futuras visitas.

- Cookies de terceros:

    Colocadas por dominios distintos al sitio web que el usuario esta visitando. suelen ser usadas por anunciantes para rastrear al ususario entre diferentes sitios.

## setcookie()

Esta funcion se utiliza para eviar una cookie al navegador del ususario. 

- ***Sintaxis basica***


```
bool setcookie(
    string $name,
    string $value = "",
    int $expires = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
);

```

Donde los parametros son:

- `$name`: El nombre de la cookie.
- `$value`: El valor de la cookie.
- `$expires`: La fecha de expiracion de la cookie en formato timestamp unix. Si se establece a 0, la cookie se eliminara cuando se cierre el navegador.
- `$path`: La ruta en el servidor donde la cookie estara disponible. Si se establece a `"/"`, la cookie estara disponible en `www.example.com` y  en `subdomain.example.com`.
- `$secure`: Si se establece a `true`, la cookie solo se enviara a traves de conexiones https.
- `$httponly`: Si se establece a `true`,  la cookie solo sera accesible a traves del protocolo http y no se accesible meiante scripts del navegador.

- ***Ejemplo sencillo***

    - php

    ```
        <?php
        setcookie(
            name: "header_color",
            value: "#9fd5d1",
        );

        $color = $_COOKIE["header_color"] ?? "#e30052";

        ?>
    ```
    - Seteamos nuestra primera cookie en donde mandamos el nombre de la cookie y su valor.
    - Creamos una variable en donde si la cookie ya existe previamente se asignara dicho valor, de lo contrario se asigna un valor por defecto.

    - html

    ```
    <body>

        <div class="header" style="
            background: <?= $color ?>
        ">
            <h1>Prueba</h1>
        </div>
    
    </body>
    ```

    - Simplemente pasamos al atributo style el valor que contendra la variable $color

## Otro ejemplo de cookie

```
<?php
// Establecer una cookie llamada "usuario" con el valor "Jesus" que expire en 30 días
$nombreCookie = "usuario";
$valorCookie = "Jesus";
$expiracion = time() + (30 * 24 * 60 * 60); // 30 días a partir de ahora

setcookie($nombreCookie, $valorCookie, $expiracion);

// Comprobar si la cookie está establecida y mostrar un mensaje
if (isset($_COOKIE[$nombreCookie])) {
    echo "Hola, " . $_COOKIE[$nombreCookie] . "! Bienvenido de nuevo.";
} else {
    echo "¡Hola, visitante! Parece que es tu primera vez aquí.";
}
?>
```

- Establecer la cookie: utilizamos `setcookie`para crear  una cookie llamada `usuario` con el valor `jesus`. La cookie expirara en 30 dias. `time()` devuelve el tieeempo actual en segundosdesde la epoca unix y `30 * 24 * 60 * 60` calcula los segundos equivalentes a 30 días.
- Comprobar la cookie: unsamos `isset($_COOKIE[$nombreCookie])` para verificar si la cookie esya establecida. Si es asi, mostramos un mensaje de bienvenida con el nombre almacenado en la cookie. Si no esta establecida, mostramos un mensaje indicando que es la primera vez que el usuario visita el sitio.
