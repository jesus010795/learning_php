<?php
session_start();

$users = [

    array(
        "username" => "MisterMichi",
        "email" => "elmister@michis.com"
    ),

    array(
        "username" => "Michiman",
        "email" => "michi@man.com"
    ),

];

$user = $_GET["user"] ?? "";



$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];

echo "<pre>";
print_r($users[$user]["username"]);
echo "</pre>";

