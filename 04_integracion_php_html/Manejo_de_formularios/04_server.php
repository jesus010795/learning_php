<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

$base_name = $_FILES['image']['name'];
$imagen = $_FILES['image']['tmp_name'];
$ruta_a_subir = "archivos/$base_name";

move_uploaded_file($imagen, $ruta_a_subir);

?>