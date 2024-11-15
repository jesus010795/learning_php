<?php

require("vendor/autoload.php");


class Michi
{
    protected $patas = [];
    protected $color;

    public function __construct(string $color)
    {
        $this->color = $color;

        for ($i=0; $i < 4; $i++) { 
            $this->patas[$i] = new PatasMichi();
        }
    }    
}


class PatasMichi
{

    protected $nails = 4;
    protected $description = "Tiene manchas";

    public function get_description() : string
    {
        return $this->description;
    }

}

$casa_de_michis = [
    "nombre" => "Michiland",
    "ubicacion" => [
        "pais" => "Mexico",
        "ciudad" => "Monterrey",
        "colonia" => "doctores",
        "numero" => 27
    ],
    "numero_de_michis" => 3,
    "michis" => [
        new Michi("negro"),
        new Michi("gris"),
        new Michi("blanco"),
    ],
];

echo "<pre>";
print_r($casa_de_michis);
echo "</pre>";

dd($casa_de_michis)

?>