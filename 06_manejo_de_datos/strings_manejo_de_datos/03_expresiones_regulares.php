<?php
#EXPRESIONES REGULARES
/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/


$psw = "123456a";

var_dump((bool) preg_match('/^[1-9]{6,9}$/', $psw));


?>
