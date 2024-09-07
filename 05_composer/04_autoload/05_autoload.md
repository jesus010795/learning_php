# Creacion de autoload

La sección autoload es particularmente importante para la carga automática de clases y archivos PHP.

el siguiente ejemplo muestra la estructura de una configuracion basica.

## files

La clave files permite especificar una lista de archivos php que deben ser cargados automaticament cada vez que se ejecuta Composer. Estos archivos suelen contener funciones auxiliares o configuraciones globales.

Estos archivos se incluiran en cada peticion independientemente de si se utilizan o no. Es util para funciones que debene star disponibles en todo el proyecto.

## classmap

Permite especificar directorios o archivos individuales que Composer debe escanear para buscar clases, interfaces y traits. Composer generara un mapa de todas las clases encontradas u as cargara automaticamente cuando se necesiten.

- `"database/seeds"`: Composer buscará clases en este directorio.
- `"database/factories"`: Composer también buscará clases en este directorio.

Este método es útil cuando tienes una estructura de clases que no sigue ninguna convención de nombres específica.

## psr-4

La clave `psr-4` define un estándar de carga automática de clases basado en namespaces y rutas de archivos. PSR-4 es una recomendación ampliamente adoptada para la carga automática de clases en PHP. 

- `"Text\\": "src/"`: Este mapeo significa que cualquier clase en el namespace Text será buscada en el directorio src/. Por ejemplo, la clase Text\Formatter será cargada desde el archivo `src/Formatter.php`.


### composer.json

```
{
    "autoload": {
        "files": [
            "src/file1.php",
            "src/file2.php"
        ],
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "Text\\": "src/"
        }
    }
}

```

### Estructura de carpetas de acuerdo al archivo json creado.

```
proyecto/
├── composer.json
├── src/
│   ├── file1.php
│   ├── file2.php
│   ├── Formatter.php
│   └── Parser.php
├── database/
│   ├── seeds/
│   │   └── SeedClass.php
│   └── factories/
│       └── FactoryClass.php
└── vendor/
    └── autoload.php

```

## Usar Composer para Generar el Autoload
Después de definir la configuración de autoload en tu composer.json, debes ejecutar el comando:

`composer dump`

Este comando genera los archivos necesarios en el directorio vendor para que Composer pueda manejar la carga automática de clases.

## index.php
Todo programa se dirigira a index.php y a su ves el index lo primero que ejecutara sera el auto.load

#### Conclusión
El autoload en Composer facilita la gestión y carga de clases en un proyecto PHP. Al definir la configuración de autoload en composer.json, Composer puede cargar automáticamente las clases y archivos necesarios, siguiendo las convenciones establecidas. Esto simplifica enormemente el desarrollo, especialmente en proyectos grandes con muchas dependencias y clases.