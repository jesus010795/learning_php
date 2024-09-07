# JSON

JSON (JavaScript Object Notation) es un formato ligero para el intercambio de datos. Es fácil de leer y escribir para los humanos y fácil de parsear y generar para las máquinas. JSON se utiliza comúnmente para transmitir datos en aplicaciones web (por ejemplo, enviar datos del servidor al cliente, y viceversa).

## Características de JSON
- Texto Simple: JSON es un formato basado en texto que utiliza un conjunto de reglas de notación muy simples.
- Estructura de Datos: JSON puede representar estructuras de datos simples como objetos y arrays, así como valores primitivos como cadenas, números, booleanos y null.
- Compatibilidad: Aunque el nombre implica JavaScript, JSON es un formato independiente del lenguaje y es soportado por muchos lenguajes de programación, incluidos Python, PHP, Java, C#, entre otros.

## Estructura de JSON
- Objetos: Están delimitados por llaves {} y contienen pares clave-valor.
- Arrays: Están delimitados por corchetes [] y contienen una lista de valores.

### Ejmplo de un objeto JSON

```
{
    "nombre": "Jesús Cruz",
    "edad": 25,
    "email": "jesus@example.com",
    "habilidades": ["PHP", "Python", "JavaScript"],
    "direccion": {
        "calle": "Av. de la Reforma",
        "numero": 123,
        "ciudad": "Ciudad de México",
        "pais": "México"
    },
    "casado": true
}
```

#### Conclusión
JSON es un formato esencial en el desarrollo de aplicaciones modernas debido a su simplicidad y capacidad para representar datos estructurados de manera eficiente. Es ampliamente utilizado para el intercambio de datos entre el cliente y el servidor en aplicaciones web.

# composer.lock


El archivo composer.lock se genera automáticamente cuando ejecutas composer install o composer update y contiene una instantánea precisa de las versiones exactas de las dependencias que fueron instaladas. Este archivo asegura que todas las personas que trabajen en el proyecto utilicen las mismas versiones de las dependencias, garantizando así la consistencia y estabilidad del entorno de desarrollo y producción.

Funcionalidades del composer.lock

- Consistencia de Dependencias:

    Asegura que todos los desarrolladores utilicen las mismas versiones de las dependencias especificadas.
    Mantiene la coherencia entre los entornos de desarrollo, pruebas y producción.

- Rendimiento Mejorado:

    Al usar composer install, Composer lee el archivo composer.lock y sabe exactamente qué versiones de las dependencias instalar, lo que hace que el proceso sea más rápido ya que no necesita resolver versiones nuevamente.

- Determinismo en la Instalación:

    Garantiza que las mismas versiones de las dependencias se instalen cada vez, evitando problemas de compatibilidad y errores inesperados causados por cambios en las dependencias.