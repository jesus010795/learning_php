<?php

$server = "localhost";
$database = "finanzas_personales";
$username = "jesus";
$password = "fiona";

// FORMA PROCEDURTAL
// $mysqli = mysqli_connect($server, $username, $password, $database);

//PROGRAMACION ORIENTADA A OBJETOS
$mysqli = new mysqli($server, $username, $password, $database);

// COMPROBAR CONEXION

// COMPROBAR CONEXION DE FORMA PROCEDURAL

// if (!$mysqli){
//     die("Fallo la conexion: ". mysqli_connect_error());
// }

// COMPROBAR CONEXION DE MANERA ORIENTADA A OBJETOS

if ($mysqli->connect_errno){
    die("Fallo la conexion: {$mysqli->connect_error}");
}

//
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);
?>