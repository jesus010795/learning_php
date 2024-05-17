<?php

$users = ["jesus", "hector", "benja"];

do {
    $contador = 1;
    foreach($users as $user){
        echo $contador . " " . strtoupper($user) . "\n";
        $contador++;
    }
    
    $prompt_user = strtolower(readline("Por favor ingresa tu nombre de ususario: "));

    
} while (in_array($prompt_user, $users));

echo "Ususario no encontrado";

echo "\n";