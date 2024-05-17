<?php

$michis = array(

    array(
        "nombre" => "Misifu",
        "ocupacion" => "Sr. python dev",
        "color" => "carey",
        "comida" => array(
            "favoritas" => ["jamon", "pollo", "atun"],
            "no_favoritas" => ["cat show", "wiskas"]
        ),
    ),
    array(
        "nombre" => "julieta",
        "ocupacion" => "Backend developer",
        "color" => "negro",
        "comida" => array(
            "favoritas" => ["carne", "pollo", "zcanahoria"],
            "no_favoritas" => "croquetas"
        ),
    ),
    array(
        "nombre" => "romeo",
        "ocupacion" => "Web master",
        "color" => "negro",
        "comida" => array(
            "favoritas" => ["pizza", "pollo", "elote"],
            "no_favoritas" => ["croquetas", "garbanzo"]
        ),
    )
);

// print_r($michis);

$misifu = $michis[0];
var_dump($misifu);
$misifu_comida = implode(", ", $misifu['comida']['favoritas']);
var_dump($misifu_comida);
// $comida_misifu = [];

echo "Recorrido\n";

foreach ($misifu['comida'] as $grupo => $datos){
   echo "Grupo de comida: {$grupo} \n";

   foreach ($datos as $comida){
    echo $comida . "\n";
    
   }
}


echo "El color de misifu es: {$misifu['color']} \n";
echo "La comida favorita de misifu es $misifu_comida \n";
echo "\n";
?>