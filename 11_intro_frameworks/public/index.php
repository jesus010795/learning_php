<?php
// var_dump(__DIR__.'../vendor/autoload.php');
// var_dump($request->getController());
// var_dump($request->getMethod());

require __DIR__ . '/../vendor/autoload.php';

$request = new App\Http\Request;
$request->send();

?>