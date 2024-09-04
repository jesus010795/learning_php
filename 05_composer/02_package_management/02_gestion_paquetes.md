# Gestion de paquetes en php

El trabajo de ocmposer es centralizar todos los paquetes de php.
Anteriormente si necesitabamos agregar alguna funcionalidad de nuestro proyecto en php, teniamos que agregar uno a uno las librerias o funcionalidades que resolvian esta necesidad.

Composer es la herramienta en donde se escriben los diferentes comandos, estos comandos mandan a llamar desde el repositorio oficial de composer el paquete completo que nos resuelve la necesidad.

## Manejo de paquetes

### Composer
    Es la herramienta que nos sirve para manejar las dependencias de php.

### Packagist
Es nuestro buscador de paquetes.

Cuando necesitamos un paquete, nos dirigimos a esta pagina y al encontrar nuestro paquete nos arrojara el comando especifico para descargar e instalar los paquetes que son necesarios dentro de nuestro proyecto.

- Ejemplo de instalacion de paquetes

Nos dirigimos a la pagina de packagist, tecleamos el apquete que necesitamos, escogemos el que tienn mayor usabilidad y lo instalamos en nuestro proyecto.

- Ejemplo con nesbot/carbon

    Dentro de la carpeta de un proyecto nuevo ejecutamos el siguietne comando que nos instalara las dependencias y todo lo que se necesita para utilizar el paquete
    
    ```
    composer require nesbot/carbon 
    ```

-  Ejemplo con phpunit

    Este paquete se instalara como en modo de desarrollo ya que en produccion no es necesario que hagamos pruebas unitarias
    ```
    composer require --dev phpunit/phpunit
    ```

- Archivo composer.json creado

    Esta sera la estructura de nuestro archivo json que se creara despues de haber instala nuestros paquetes

    ```
    {
        "require": {
            "nesbot/carbon": "^3.8"
        },
        "require-dev": {
            "phpunit/phpunit": "^11.3"
        }   
    }
    ```