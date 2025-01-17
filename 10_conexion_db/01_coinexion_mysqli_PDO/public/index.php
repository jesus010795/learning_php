<?php
require("../vendor/autoload.php");

//Obtener url
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);



$resource = $slug[0] == "" ? "/": $slug[0];
$id = $slug[1] ?? null;

// echo "<pre>";
// print_r($resource);
// echo "</pre>";

switch ($resource) {
    case '/':
        echo"Estas en la front page";
        break;

    case 'incomes':
        echo"Estas en incomes";
        break;

    case 'withdrawals':
        echo"Estas en la withdrawals";
        break;

    default:
        echo "404 not found";
        break;
}