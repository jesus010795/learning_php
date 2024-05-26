<?php
$contador = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ciclos</h1>
    <section>
        <h2>For</h2>
        <ul>
            <?php for ($i = 0; $i <= 10; $i++) : ?>
                <li>Bucle <?= $i ?> </li>
            <?php endfor; ?>
        </ul>
    </section>

    <section>
        <h2>while</h2>

        <?php while ($contador < 10) : ?>

            <a href=""><?= $contador ?></a> <br>

            <?php
            $contador++;
            ?>

        <?php endwhile; ?>
    </section>

    <section>
        <h2>foreach</h2>
        <ul>
            <?php
            $frutas = ["Manzana", "Banana", "Cereza"];
            ?>
            <?php foreach ($frutas as $fruta) : ?>
                <li><?= $fruta ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>

</html>