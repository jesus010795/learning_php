<?php

// ARREGLOS COMO PARAMETROS POR DEFECTO

function sumar_array($edades = array(5,15,10))
{
return array_sum($edades);
}

echo sumar_array();
echo "\n";

echo sumar_array($edades = array(35,40,25));
echo "\n";


// ENVIAR CLASES U OBJETOS POR ARGUMENTOS
class UnaClaseRandom
{

}

function recibir_clase($clase = new UnaClaseRandom){


}

// ----- EJEMPLO

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

?>