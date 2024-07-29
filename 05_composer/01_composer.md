# Composer

Herramienta que profesionalizo la forma en la que se traba en php.

Esta herramienta se instala en el proyecto, y nos ayuda a gestionar los diferentes paquetes, si necesitamos un componente, la descargamos directamente desde composer.
> Composer es lo mismo que npm en javascript.

## Archivo principal

- Crear un archivo `composer.json`: Este archivo es el corazón de Composer. Define las dependencias de tu proyecto.

    - `"name"`: Define el nombre del paquete. En este caso, el nombre es `"crdz/text"`. Este nombre suele seguir la convención `"vendor/paquete"`, donde "crdz" es el nombre del vendor y "text" es el nombre del paquete.
    - La sección `"autoload"` define cómo Composer debe cargar automáticamente las clases de tu proyecto. Tiene dos partes principales en este caso:
        - `psr-4"`: Especifica que Composer debe usar el estándar de autoloading PSR-4.
            - `"Text\": "src/"`: Define un mapeo de namespace. Indica que cualquier clase que esté en el namespace Text\ se encuentra en el directorio src/. Por ejemplo, la clase Text\Example se espera que esté en el archivo src/Example.php.
        - `"files"`: Permite incluir archivos específicos que no siguen la convención de PSR-4 para el autoloading. Estos archivos se cargarán automáticamente cuando se ejecute el autoloader de Composer.
            - `"src/helpers.php"`: Indica que el archivo src/helpers.php debe ser incluido. Esto es útil para archivos que contienen funciones globales, constantes o configuraciones que no están dentro de una clase.

```
{
"name": "crdz/text",
"autoload": {
    "psr-4": {
        "Text\\": "src/"
    },
    "files":[
        "src/helpers.php"
    ]
}
}
```

## Creacion de clase Format

CRearemos la clase que sera de utilidad para incrustar en nuestro helper 

## Composer dump

una evs hemos creado nuestro pequeno helper, ejecutamos el comando `composer dump`.
Despues de ejecutar el comando, se nos creara una carpeta llamada vendor, y con ella una serie de archivos de configuracion.
Al revisar el archivo autoload_files, observaremos que se ha registrado nuestro helper y ya esta disponible para que sea utilizado.
De igual forma el namespace estara registrado.

## Probar nuestro helpper

- Tenemos que importar nuestra configuracion de composer que hemos realizado, Esto se hace importando el archivo autoload, que sera el encargado de precargar toda nuestra configuracion. 

- Posteriormente imprimimos un string haciendo uso de nuestra clase.

```
<?php

require __DIR__.'/vendor/autoload.php';

echo Text\Format::upperText("hola desde composer");

?>
```

### Mejorando nuestra sintaxis

Hemos indicado a composer que dentro de files habra un archivo llamado helpers.php, sin embargo hasta este punto no hemos credado dicho archivo.
En este archivo crearemos una funcion que facilitara el uso de nuestro namespace para que sea mas facil de leer cuando estemos desarrollando.

 - `helpers.php`

 Este archivo sera  creado en la carpeta src, al mismo nivel denuestra clase-namespace Format

 ```
 <?php

function upper($value){
    return Text\Format::upperText($value);
}

?>
 ```

 Al estar dentro del namespace de format, podemos hacer uso de la clase sin necesidad de importar nada.

 ### Ejecutando el helper

 Ahora si podremos usar esta funcion que es mas agradable a la lectura dentrod e nuestro proyecto.

 - index.php

 ```
require __DIR__.'/vendor/autoload.php';

echo upper("hola desde composer");
 ```