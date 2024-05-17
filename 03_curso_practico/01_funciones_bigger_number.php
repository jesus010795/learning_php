<?php
// Funcion que devuelva el numero mas grande de una lista de numeros

$numbers = array(1,23,21,34,56,101,0,12);

function big_number($param){

    $bigger_number = 0;
    $array_length = count($param);
    echo $array_length;
    echo "\n";

    for ($i=0; $i < $array_length; $i++) { 
        $current_number = $param[$i];
        
        if($current_number > $bigger_number){
            $bigger_number = $current_number;
        }
        
    }

    
    return $bigger_number;

}

$bigger_number = big_number($numbers);

echo $bigger_number . "\n";

?>