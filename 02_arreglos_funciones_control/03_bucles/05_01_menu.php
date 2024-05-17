<?php

// do {
//     echo "1 - Comprar \n";
//     echo "2 - Salir \n";

//     $opc = readline("Por favor ingresa una opcion: ");

//     if ($opc != 1 | $opc != 2 ){

//     }

// } while (true);

$menu = true;




while($menu){
    echo "1 - Comprar \n";
    echo "2 - Salir \n";

    $opc = readline("Por favor ingresa una opcion: ");

    if ($opc == 1 ){
        echo "opc 1 \n";
    } elseif ($opc == 2){
        echo " Escogista la opcion 2 \n";
        break;
    } else{
        echo "Por favor escoge una opcion correcta: \n";
    }
}
?>