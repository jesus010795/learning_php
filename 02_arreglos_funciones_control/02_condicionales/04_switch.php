<?php


echo "coche \n";
echo "moto \n";
echo "camion - camioneta \n";
echo "autobus \n";

$tipoVehiculo = readline("Profavor ingresa el tipo de vehiculo: ");
$tipoVehiculo = strtolower($tipoVehiculo);

echo "\n";

echo $tipoVehiculo;

echo "\n";

switch ($tipoVehiculo) {
    case "coche":
        echo "El peaje para coches es $2 \n";
        break;
    case "moto":
        echo "El peaje para motos es $1 \n";
        break;
    case "camion":
    case "camioneta":
        echo "El peaje para camiones y camionetas es $5 \n";
        break;
    case "autobus":
        echo "El peaje para autobuses es $10 \n";
        break;
    default:
        echo "Tipo de vehículo no reconocido \n";
}