# Inicializacion de proyecto 

Para inicializar nuestro proyecto ejecutaremos el comando composer init, resultando el siguiente archivo de comfiguracion.

Instalaremos el paquete phpunit en modo de desarrollo

```
{
    "name": "jesus/validate",
    "description": "Proyecto de validacion",
    "type": "project",
    "require-dev": {
        "phpunit/phpunit": "^11.3"
    },
    "license": "MIT",
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
    "authors": [
        {
            "name": "jesus",
            "email": "jcd010795@gmail.com"
        }
    ],
    "require": {}
}

```

Cuando estamos trabajando las pruebas en php, utilizamos una herramienta llamada phpunit, debido a esto debemos crear un documento llamado phpunit.xml, este sera nuestro archivo de configuracion para realizar las pruebas.

# Trabajando con php unit

El archivo `phpunit.xml` es un archivo de configuración utilizado por PHPUnit, que es una de las bibliotecas más populares para realizar pruebas unitarias en PHP. Este archivo define cómo se deben ejecutar las pruebas y especifica diversas configuraciones y opciones para el entorno de prueba.

## Funcionalidad del archivo phpunit.xml

El archivo phpunit.xml sirve para:

- Configuración Global de Pruebas:

    Establecer configuraciones comunes que se aplican a todas las pruebas del proyecto.

- Definir Suites de Pruebas:

    Agrupar diferentes conjuntos de pruebas en suites, permitiendo ejecutar conjuntos específicos de pruebas en lugar de todas a la vez.

- Configuración de Entorno:

    Establecer variables de entorno y constantes que deben estar disponibles durante la ejecución de las pruebas.

- Configuración de Extensiones y Listeners:

    Especificar extensiones y listeners que pueden modificar el comportamiento de PHPUnit o proporcionar funcionalidad adicional.

- Opciones de Salida:

    Configurar la forma en que los resultados de las pruebas se muestran o se almacenan (por ejemplo, en archivos de log).

## Creacion de archivo xml

```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuite name="test directory">
        <directory>test</directory>
    </testsuite>
</phpunit>
```

**Explicación**:

- Encabezado XML:

`<?xml version="1.0" encoding="UTF-8"?>`

Esta línea indica que el documento es un archivo XML y define la versión XML utilizada (1.0) y la codificación de caracteres (UTF-8).

- Elemento <phpunit>:

`<phpunit bootstrap="vendor/autoload.php" colors="true">`
bootstrap="vendor/autoload.php": Este atributo especifica el archivo que se debe cargar antes de ejecutar las pruebas. En este caso, se está cargando el archivo de autoload generado por Composer (vendor/autoload.php), que generalmente incluye todas las dependencias necesarias para las pruebas.
colors="true": Este atributo habilita la salida en color para los resultados de las pruebas, lo que hace que la salida sea más legible.

- Elemento <testsuite>:

`<testsuite name="test directory">`
Este elemento define una suite de pruebas llamada "test directory". Una suite de pruebas es un conjunto de pruebas que pueden ejecutarse juntas.

- Elemento <directory>:

`<directory>test</directory>`
Este elemento especifica el directorio donde se encuentran los archivos de prueba. En este caso, está configurado para buscar pruebas en el directorio test.

### Ejecucion de archivo xml

Para usar este archivo de configuración, simplemente ejecutas PHPUnit desde la línea de comandos en el directorio raíz de tu proyecto:

`vendor/bin/phpunit`

PHPUnit utilizará el archivo phpunit.xml para configurar y ejecutar las pruebas definidas en el directorio test.

## Creacion de clases para utilizar las pruebas unitarias

Crearemos la carpeta `tests` que es el lugar en donde se almacenaran las clases que ejecutaran los tests, esto fue definido previamente en la configuracion xml.

A continuacion se definira la clase para la validacion de correos electronicos y una clase de prueba unitaria, en donde utilizaremos PHPHUnit para verificar el comportamiento esta clase de validacion.

- **ValidateTest.php**

Dentro de esta carpeta crearemos el archivo ValidateTest.php 

- `use PHPUnit\Framework\TestCase;`: Indicamos haremos uso de la libreria de phpunit especificamente la clase TestCase y sus metodos.
- `use App\Validate;`: Esta es una clase que mandamos a llamar en este test, dicha clase contendra la validacion en si y nos devolvera si nuestra variable aprueba o no el test.

-  Crearemos nuestra clase que hereda de la clase `TestCase`, lo que la convierte en una clse de prueba de PHPUnit.
- Dentro crearemos la funcion o metodo `test_email()`, la cual manda a llamar la clase `Validate` y el metodo `email` con el correo como parametro, el cual nos devuelve true o false al ejecutarse sobre la variable a validar. Este resultado se guarda en la variable `$email`.
- Finalmente utilizaremos el metodo de phpunit que realizara la prueba.
    - **`$this->assertTrue($email)`**: Usa el método `assertTrue` de PHPUnit para verificar que `$email` es true. Esto pasa la prueba si `Validate::email` devuelve `true`, indicando que` example@mail.com` es un correo electrónico válido.


```
<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('example@mail.com');
        $this->assertTrue($email);
    }
}

?>
```

- **Validate.php**

> En POO de PHP, namespace es una manera de encapsular clases, interfacesm funciones y constantes para evitar colisiones de nombres entre diferentes partes de un programa o entre diferentes bibliotexas de codigo. Estos namespaces permiten organizar el codigo de manera mas clara y estructurada, especialmente en proyectos grande o cuando se utlizan multiples bibliotecas de terceros.


- Crearemos el `namespace App`
- Este contendra la clase `Validate`
- `public static function email($value)`: Crearemos la funcion o metodo email el cual recibe como parametro un valor, dicho valor peude ser cualquier cosa, pero esta hecho especificamente para validar emails.
    - `public static`: Indica que el método puede ser llamado sin instanciar la clase.

 
- Retornaremos el valor booleano que nos devuelve la funcion `filter_var`, dicha funcion recibe como primer parametro el valor o variable mandada desde el meto y como segundo parametro la validacion del email.

    >Usa la función filter_var con el filtro FILTER_VALIDATE_EMAIL para validar si $value es un correo electrónico válido.

```
namespace App;

class Validate
{
    public static function email($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}

?>
```


## Conclusión

Este conjunto de archivos muestra cómo definir una clase de validación simple y cómo escribir una prueba unitaria para verificar su funcionalidad utilizando PHPUnit.

**`Validate.php`** define una clase con un método para validar correos electrónicos.
**`ValidateTest.php`** contiene una prueba unitaria que verifica si el método de validación de correos electrónicos funciona correctamente, comprobando que `example@mail.com` es considerado un correo electrónico válido.