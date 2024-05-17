<?php
/**
 * Ejercicio: Gestión de Inventario de Productos
*Descripción:
*Imagina que estás desarrollando un sistema para gestionar el inventario de una tienda. Necesitas crear una aplicación que permita a los usuarios ver información sobre los productos disponibles en la tienda. Cada producto tiene un nombre, un precio y una cantidad disponible en stock.
*Instrucciones:
 * 
 * Muestra la información de los productos disponibles en la tienda, incluyendo el nombre del producto, su precio y la cantidad disponible en stock.
 * 
 * implementa una funcionalidad que permita a los usuarios realizar una compra de un producto específico. Esto podría incluir ingresar el nombre del producto y la cantidad que desean comprar.
 * 
 * Utiliza condicionales para verificar si hay suficiente stock disponible para la compra. Si la cantidad deseada es menor o igual al stock disponible, actualiza el stock del producto y muestra un mensaje de confirmación de la compra. Si no hay suficiente stock disponible, muestra un mensaje indicando que el producto está agotado.
 * 
 * Actualiza la información del inventario después de cada compra realizada.
 * 
 * 
 * 
 */

 $inventario = array(
    array("nombre" => "camiseta", "precio" => 20, "stock" => 10),
    array("nombre" => "pantalon", "precio" => 30, "stock" => 5),
    array("nombre" => "zapatos", "precio" => 50, "stock" => 8),
    array("nombre" => "tenis", "precio" => 55, "stock" => 1),
);

// var_dump($inventario);
// $inventario[0]["stock"] = 2;
// var_dump($inventario);

echo "Inventario de la tienda \n";

foreach ($inventario as $producto) {
    $stock = $producto['stock'];
    $producto_nombre = strtoupper($producto["nombre"]);
    
    if ($stock > 0) {
        echo "Nombre: " .  $producto_nombre . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n \n";
    }
}
echo "\n";

$producto_usuario = strtolower(readline("Porfavor indica el producto que deseas comprar: "));
$cantidad_productos = (int)readline("Porfavor ingresa la cantidad que deseas a comprar: ");

$indice_producto = null;
$actual_stock = null;

foreach ($inventario as $indice => $producto) {
    if ($producto["nombre"] === $producto_usuario) {
        $indice_producto = (int)$indice;
    }
}

if ($indice_producto !== null) {

    $actual_stock =  $inventario[$indice_producto]["stock"];

    if ($actual_stock >= $cantidad_productos ) {

        $nuevo_stock = ($actual_stock - $cantidad_productos);
        $inventario[$indice_producto]["stock"] = $nuevo_stock;
        echo "El stock del $producto_usuario ha sido actualizado a $nuevo_stock \n";
    
    } else {

        echo "La cantidad que desea comprar supera la cantidad de estock \n";
        echo "La mayor cantidad que puede adquirir es de $actual_stock \n";
    
    }
} else {
    echo "El $producto_usuario no se encontró en el inventario. \n";
}


foreach ($inventario as $producto) {
    $stock = $producto['stock'];
    $producto_nombre = strtoupper($producto["nombre"]);
    
    if ($stock > 0) {
        echo "Nombre: " .  $producto_nombre . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n \n";
    }
}

?>