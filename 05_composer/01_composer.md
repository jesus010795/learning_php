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

Crearemos la clase que sera de utilidad para incrustar en nuestro helper 

Este ejemplo define una clase y una función estática dentro de ella.

- Namespace Text:

Esto define un espacio de nombres llamado "Text". Los espacios de nombres sirven para organizar el código y evitar conflictos de nombres cuando diferentes partes del código utilizan nombres similares.

-  class Format

Declara una clase llamada `Format`. En PHP, una clase es una plantilla para crear objetos y puede contener propiedades (variables) y métodos (funciones).

- `public static function upperText($value)`

    - Declara un método estático llamado `upperText` que toma un parámetro `$value`.

    - `public`: Este método es accesible desde fuera de la clase.
    - `static`: El método pertenece a la clase en sí, no a una instancia específica de la clase. Esto significa que puedes llamar a este método sin crear un objeto de la clase Format.

- `return strtoupper($value);`

    - Dentro del método `upperText`, se llama a la función incorporada de PHP `strtoupper`, que convierte una cadena de texto a mayúsculas.
    - Luego, devuelve el valor convertido.

```
namespace Text;

class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }
}
```



## Composer dump

una evs hemos creado nuestro pequeno helper, ejecutamos el comando `composer dump`.
Despues de ejecutar el comando, se nos creara una carpeta llamada vendor, y con ella una serie de archivos de configuracion.
Al revisar el archivo autoload_files, observaremos que se ha registrado nuestro helper y ya esta disponible para que sea utilizado.
De igual forma el namespace estara registrado.

## Probar nuestra clase Format

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

## Resumen

1. Todo inicia en nuestro archivo index.php, este index carga todo el sistema de autoload o autocarga de composer.
2. Gracias a esta carga, composer entiende que por ahi hay una funcion llamad upper,
3. Dicha funcion se encuentra en nuestro archivo helpers.php
4. helpers hace uso de la clase que tenemos dentro de la carpeta src.
5. Helpers no sabe que esta clase es un archivo "hermano", entonces hace uso del namespace Text
    - Dicho namespace esta definido en nuestro archivo composer.json en donde indica que: Cuando escribas Text, haz referencia a la carpeta src
    ```
    "psr-4": {
        "Text\\": "src/"
    }
    ```
- Despues de la carpeta src tenemos la clase format, y esta es la forma comun de trabajar.

## Creando otro metodo

- Dentro de la clase crearemos otro metod simple muy similar al anterior pero convertiremos todo el string a minusculas
    ```
    public static function lowerText($value)
    {
        return strtolower($value);
    }
    ```
- Nos dirigiremos a helper.php y de igual forma crearemos la funcion que llamara a este metodo y que nos facilitara la lectura y el manejo de este metodo.
    ```
    function lower($value)
    {
        return Text\Format::lowerText($value);
    }
    ```
- Finalmente ejecutaremos este metodo dentro de nuestro index.
    `echo lower("CODIGO EN MAYUSCULAS Y miNUSculas");`

> Todo empieza en index, index busca la funcion en helpers, helpers busca la clase y finalmnte se ejecuta el metodo 

## Agregando validaciones a nuestros metodos.

Para mejorar nuestra funcionalidad, sera necesario validar si esta funcion existe y en caso de que si, que se ejecute y si ya existe dentro de sus sitema de carga entonces no lo volvera a cargar

```
if(! function_exists("upper"))
{
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}

```


> Todo componente y todo paquete tiene este ciclo de vida, nuestro proyecto vive dentro de la carpeta src, y esta carpeta y existe a lo largo del sistema gracias a la configuracion de composer

> Nosotro pudiera crear estor archivos sin necesidad de composer y manadr a llamar cada funcionalidad y cada metodo, pero lo que composer nos ofrece es un sistema de carga automatica