<?php

require("../vendor/autoload.php");

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use Router\RouterHandler;


//Obtener url
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);


$resource = $slug[0] == "" ? "/": $slug[0];
$id = $slug[1] ?? null;

// echo "<pre>";
// print_r($resource);
// echo "</pre>";


//Instancia de router
$router = new RouterHandler();

switch ($resource) {
    case '/':
        echo"Estas en la front page";
        break;

    case 'incomes':
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(IncomesController::class, $id);
        break;

    case 'withdrawals':
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(WithdrawalsController::class, $id);
        echo"Estas en la withdrawals";
        break;

    default:
        echo "404 not found";
        break;
}