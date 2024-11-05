<?php

function incrementar_numero(&$valor)
{
    $valor ++;
}

$numero = 10;
echo $numero;
echo "\n";
incrementar_numero($numero);
echo $numero;
echo "\n";

?>