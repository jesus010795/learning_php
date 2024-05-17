<?php

function clear() {
    if(PHP_OS == "WINNT"){
        system("cls");
    } else {
        system("clear");
    }
}


define("MAX_ATTEMPS", 6);

$possible_words = array(
    "perro",        // Animal
    "manzana",      // Fruta
    "coche",        // Vehículo
    "sol",          // Astro
    "libro",        // Objeto
    "amarillo",     // Color
    "correr",       // Acción
    "felicidad",    // Emoción
    "rio",      // Geografía
    "cancion",      // Arte
    "computadora",  // Tecnología
    "rapido",       // Adjetivo
    "dormir",        // Concepto
    "risa",         // Expresión
    "guitarra"      // Instrumento
);



// ------ INICIALIZACION DE JUEGO

echo "Juego de ahorcado \n";
echo "\n";


$choose_word = $possible_words[ rand(0, 14)];
$word_length = strlen($choose_word);

$discovered_letters = str_pad("", $word_length, "_");
$attemps = 0;

echo "Tenemos una palabra de $word_length letras \n";

do {

    if($discovered_letters == $choose_word) {
        echo "\nFelicidades has adivinado la palabra!! \n\n";
        break;
    }

    echo $discovered_letters . "\n\n";
    $player_letter = strtolower(readline("Escribe una letra: "));
    echo "\n";
    
    

    if (str_contains($choose_word, $player_letter)) {
        echo "Letra adivinada: $player_letter \n";

        $offset = 0;
        while (($letter_position = strpos($choose_word, $player_letter, $offset) )!==  false ){
            $discovered_letters[$letter_position] = $player_letter;
            $offset = ($letter_position + 1);
        }

    } else {
        clear();
        $attemps++;
        echo"Letra incorrecta, numero de intento: $attemps. Te quedan: " . MAX_ATTEMPS - $attemps . " intentos \n\n"; 
        sleep(1);
    }
} while ($attemps < MAX_ATTEMPS);

echo "La palabra era ". $choose_word . "\n";

// echo $word_length . "\n";

// ---- codigo reducido

// $position = strpos($choose_word, $player_letter);
// $discovered_letters = str_replace(str_split($choose_word), $replacement_character, $choose_word);
// function choose_word($words_arr){
//     $opc = rand(1,15);
//     $word = $words_arr[$opc];
//     return $word;
// }
?>