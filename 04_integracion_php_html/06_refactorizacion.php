<?php

$tabla_9 = array();

for ($i = 1; $i <= 10; $i++){
    // $result = "9 x " . ($i) . " = ". 9 * $i;
    // array_push($tabla_9, $result);

    $result = 9 * $i;
    $texto = "9 x $i = $result";

    array_push($tabla_9, $texto);


    // echo $result;
}

// print_r($tabla_9);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h2>Tabla</h2>

        <!-- <ul>
            <?php

            for ($i = 0; $i < 10; $i++) {
                echo "<li>" . "9 x 1 = " . (9 * ($i + 1)) . "</li>";
            }

            ?> 
        </ul>-->
        <!-- <ul>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <li>
                    <p>9 X <?= $i ?> = <?= 9 * $i ?> </p>
                </li>

            <?php endfor; ?>
        </ul> -->
<!-- 
        <ul>
            <?php foreach ($tabla_9 as $index => $valores): ?>
                <li>9 x <?=$index + 1?> = <span><?=  $valores ?></span></li>
            <?php endforeach; ?>
        </ul> -->

        <ul>
            <?php foreach ($tabla_9 as $result): ?>
                <li><?= $result ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>

</html>