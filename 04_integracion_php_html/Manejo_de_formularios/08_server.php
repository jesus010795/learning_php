<?php

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

// Sanitizacion

$html_entities = htmlentities($nombre);

//Entrada
//"john.doe@example.com<script>alert('XSS');</script>";
$sanitized_email = filter_var($correo, FILTER_SANITIZE_EMAIL);
//Salida
//john.doe@example.comscriptalert'XSS'script

// Validar 
$correo =  filter_var($correo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nombre</p>
    <?= $html_entities ?>

    <p>Correo</p>
    <?=$sanitized_email ?>
</body>
</html>
