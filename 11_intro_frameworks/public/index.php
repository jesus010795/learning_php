<?php

require __DIR__.'/../vendor/autoload.php';

// var_dump(__DIR__.'../vendor/autoload.php');

$request = new App\Http\Request;

var_dump($request->getController());
var_dump($request->getMethod());
$request->send();

?>