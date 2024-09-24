<?php

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


?>