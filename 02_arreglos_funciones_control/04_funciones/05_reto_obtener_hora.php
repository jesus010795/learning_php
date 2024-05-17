<?php

echo "Programa que da la hora. \n";

echo "Son las: ". obtener_hora('America/Mexico_City') . "\n";

$zona_horaria = 'America/Mexico_City';
 

function obtener_hora($zona_hr) {

    date_default_timezone_set($zona_hr);
    return date("g:i:s a");
}
