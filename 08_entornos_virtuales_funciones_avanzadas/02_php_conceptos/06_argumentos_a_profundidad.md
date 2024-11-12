# Clases como argumentos


En php podemos pasar objetos de clases como argumentos en funciones. Esto nos permite crear funciones que operan en instancias de clases, aprovechanddo sus metodos propiedades. 

- Ejemplo

```
class Person
{
    public $name;
    public $last_name;

    public function __construct($name, $last_name)
    {
        $this->name = $name;
        $this->last_name = $last_name;
    }

    public function greet()
    {
        return "Hola soy {$this->name} \n";
    }
}

function get_greet(Person $p)
{
    echo $p->greet();
}

$jesus = new Person("Jesus", "Cruz");

get_greet($jesus);
```

1. Definicion de la clase

    - La clase `Person` tiene dos propiedades publicas y el constructor es uien la inicializa por tanto es necesario que a la hora de crear el objeto, seamos explicitos al definir esta propiedades
    - El metodo `greet()` devuelve un saludo utilizando la propiedad `$name`

    -  Se crea una instancia llamada `$jesus` con sus respectivas propiedades

2. Definicion de la funcion
    - LA funcion `get_greet()` acepta un objeto `Person` como argumento.
    - Dentro de la funcion, se llama el metodo `get_greet()` del objeto `Person` pasado como argumento.

    - Se llama la funcion pasando la instancia creada.


    