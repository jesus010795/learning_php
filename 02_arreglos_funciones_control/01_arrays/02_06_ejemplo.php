<?php

$escuela = array(

    array(
        "nombre" => "Misifu",
        "ocupacion" => "Sr. python dev",
        "color" => "carey",
        "Comidas" => array(
            "Favoritas" => ["jamon", "pollo", "atun"],
            "no_favoritas" => ["cat show", "wiskas"]
        )
    ),
    array(
        "Nombre" => "Michijose",
        "Ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),

    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "jQuery Developer",
        "Color" => "Blanco con manchitas negras",
        "Comidas" => array(
            "Favoritas" => "Pescado, Pollo",
            "NoFavoritas" => "Atun"
        )
    ),

    array(
        "Nombre" => "Mr. Michi",
        "Ocupacion" => "Pro en PHP",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Pizza",
            "NoFavoritas" => "Pescado"
        )
    ),

);


$michisancio = $escuela[0];

echo "Las comidas favoritas de Michisancio son " . $michisancio['Comidas']['Favoritas'];
echo "\n";

$mr_michi = $escuela[2];
echo "El color de Mr. Michi es " . $mr_michi["Color"];

echo "\n";