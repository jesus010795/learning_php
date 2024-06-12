<?php
// echo "<pre>";
// print_r($_POST['personas']);
// echo "</pre>";

// echo "<pre>";
// print_r($_POST['usuario']);
// echo "</pre>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['marcar'])) {
    echo "La casilla de verificación 'Marcar' está marcada";
  } else {
    echo "La casilla de verificación 'Marcar' no está marcada";
  }
  
  // Procesar datos de casillas de verificación con nombre común
  $colores = $_POST['colores'];
  echo "Colores seleccionados: ";
  foreach ($colores as $color) {
    echo $color . ", ";
  }

?>