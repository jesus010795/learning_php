<?php
// DECLARACIONES DE TIPO ESCALAR

function calc_area_triangulo(int $base, int $altura, string $nombre)
{
    return "Hola $nombre, el area de tu triangulo es: " . ($base * $altura) / 2;
}

echo calc_area_triangulo(3,8,"Michissancio \n");


// DECLARACIONES DE TIPO DEVOLUCION


function suma(int $n1, int $n2) : int
{
    return $n1 + $n2;
}

echo "<pre>";
print_r(suma(1,2));
echo "</pre>";

?>