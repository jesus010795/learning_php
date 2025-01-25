# Introduccion a frameworks

- Un proyecto de PHP , necesitamos crearlo con un framework
- Un framework nos permite no volver a crear la rueda
- Si hacemos todo desde cero, demoraríamos mucho tiempo, el framework, nos agiliza el trabajo, porque todo viene configurado como: conexiones,plantillas,etc. Sin descuidar la seguridad y rendimiento
Nos permite enfocarnos en la necesidad y no tanto en la arquitectura del software

## Los frameworks como Symfony y Laravel para PHP, sus características notables son:

- Administración de plantillas.
- Manejo fácil y sencillo de una conexión a una DB.
- Funciones pre-hechas.
- Sistema de testing.
- Testing Cache.
- Maneja un estándar para la creación de archivos y carpetas.
- Utilizar frameworks habla de mi dominio del lenguaje y de mis buenas prácticas de escritura de código.

## Estructra de carpetas

app
├── Http
│   ├── Controllers
│   │   ├── ContactController.php
│   │   └── HomeController.php
│   ├── Request.php
│   └── Response.php
├── helpers.php
├── composer.json
├── public
│   └── index.php
├── vendor
│   ├── autoload.php
│   └── composer
│       ├── ClassLoader.php
│       ├── LICENSE
│       ├── autoload_classmap.php
│       ├── autoload_files.php
│       ├── autoload_namespaces.php
│       ├── autoload_psr4.php
│       ├── autoload_real.php 1 
│       └── autoload_static.php
└── views
├── contact.php
├── home.php
└── layout.php   

## Front Controller

Un Front Controller es un patrón de diseño utilizado en aplicaciones web que centraliza todas las solicitudes de entrada a través de un único punto de acceso (generalmente index.php). Este archivo es el encargado de procesar la solicitud, invocar al controlador correspondiente y devolver una respuesta al usuario.
El controlador puede realizar la autenticación / autorización / registro o solicitud de seguimiento, entonces la petición al controlador adecuado.

### Request

