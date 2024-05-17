<?php

$palabras = array("sol", "luna", "cielo");
// $palabras_desordenadas = array();

$cantidad_palabras = count($palabras);

$form = "<form action='02_01_analisis.php'>";
$button = "<button type='submit'>Enviar</button>";
$form_cierre = "</form>";



for ($i = 0; $i < $cantidad_palabras; $i++) {
    $form .= str_shuffle($palabras[$i]) . ": " .
        "<input type='text' name='palabra" . "$i'" .
        "placeholder='palabra" . "$i'>" . "<br>";
}

echo $form . $button . $form_cierre;
// print_r($palabras_desordenadas);
