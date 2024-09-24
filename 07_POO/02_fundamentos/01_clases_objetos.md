# clases y objetos

La Programación Orientada a Objetos (POO) es un paradigma de programación que utiliza "objetos" para representar datos y métodos asociados. En PHP, POO se utiliza para organizar y estructurar el código de manera más eficiente y modular. 

### Clases y Objetos
- Clase: Una clase es un modelo o plantilla para crear objetos. Define las propiedades (variables) y métodos (funciones) que un objeto de esa clase puede tener.
- Objeto: Un objeto es una instancia de una clase. Es una entidad concreta que se crea utilizando la plantilla de la clase.

### Sintaxis de definicion de una clase

- Sintaxis

```
class NombreDeLaClase {
    // Propiedades
    public $propiedad1;
    public $propiedad2;

    // Constructor
    public function __construct($propiedad1, $propiedad2) {
        $this->propiedad1 = $propiedad1;
        $this->propiedad2 = $propiedad2;
    }

    // Métodos
    public function metodo1() {
        // Código del método
    }

    public function metodo2($parametro) {
        // Código del método
    }
}
```
- Clase de ejemplo

```
class Person
{
    //Propiedades
    public $id;
    public $name;
    public $last_name;

    //Constructor
    public function __construct($id, $name, $last_name){
        $this->id = $id;
        $this->name = $name;
        $this->last_name = $last_name;
    }

    //Metodos
    public function greet()
    {
        return "Hola $this->name";
    }
}
```

- Se define la clase llamada Person. En POO, una clase es una plantilla para crear objetos.
- Se declaran tres propiedades públicas:

    - `$id`: Almacena el identificador de la persona.
    - `$name`: Almacena el nombre de la persona.
    - `$last_name`: Almacena el apellido de la persona.

    Las propiedades son variables que pertenecen a la clase y se utilizan para almacenar información sobre los objetos.

- Constructor

    El constructor es un método especial que se llama automáticamente cuando se crea un objeto de la clase. En este caso, el constructor toma tres parámetros (`$id`, `$name`, y` $last_name`) y los asigna a las propiedades del objeto utilizando `$this`, que es una referencia al objeto actual.
- Metodo `greet()`
    El método greet es una función que pertenece a la clase. Este método no toma parámetros y devuelve una cadena de saludo que incluye el nombre de la persona (`$this->name`). Utiliza `$this` para acceder a la propiedad name del objeto actual.

#### Uso de la Clase Person

A continuacion aremosuso de la clase creada dentro de otro archivo, en don haremos uso de la funcion `include`.

- `index.php`

```

// Crear un nuevo objeto de la clase Person
$persona = new Person(1, "Juan", "Pérez");

// Llamar al método greet
echo $persona->greet();  // Salida: Hola Juan
```
