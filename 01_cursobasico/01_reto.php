<!-- Programa que convierte horas, minutos y segundos a unicamente segundos. -->

<?php

print "Programama para convertir horas y minutos a segundos. \n";

$horas = readline("Porfavor ingresa la hora: \n");
$minutos = readline("Porfavor ingresa los minutos: \n");
$segundos = readline("Porfavor ingresa los segundos: \n");

$horas_a_segundos = ($horas * 3600);
$minutos_a_segundos = ($minutos * 60);

$total_segundos = ($horas_a_segundos + $minutos_a_segundos + $segundos);

echo "$total_segundos \n";


// --- OTRA IMPLEMENTACION 

$segundos += (($horas*3600) + ($minutos*60));

print "$segundos \n";

?>