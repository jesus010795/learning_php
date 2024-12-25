<?php

$server = "localhost";
$database = "finanzas_personales";
$username = "jesus";
$password = "fiona";

$dsn = "mysql:host=$server;dbname=$database";

$connection = new PDO($dsn, $username, $password);

$statement = $connection->prepare("SET NAMES 'utf8'");
$statement->execute();

var_dump($statement);

?>