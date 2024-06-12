<?php
echo "<pre>";
var_dump(empty($_POST["nombre"]));
echo "</pre>";

if ( empty($_POST['nombre'])){
    echo("Nombre no enviado");
} else{
    echo "Nombre enviado";
}

?>