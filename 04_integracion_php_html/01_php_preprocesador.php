
<?php 
$mi_variable = "Jesus";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | HTML</title>
</head>

<body>
    <h1>Hola desde html</h1>

    <?php

    echo "Hola mundo desde php <br>";
    echo "<p>Hola desde un parrafo</p>";
    
    ?>

    <?=
    " <i>Otra forma de imprimir desde php</i>"
    ?>

    <p>Imprimir variable declarada:  <?= $mi_variable?> </p>
</body>

</html>