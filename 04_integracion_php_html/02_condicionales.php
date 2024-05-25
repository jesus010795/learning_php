<?php 

$varibale_booleana = false;

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
        <h2>Lo que no se debe hacer</h2>
        <p>Como ejercicio ejecutaremos un if con una condicion hardcodeada</p>
        <?php   
        if ($varibale_booleana) {
            echo " <p>La sentencia es true</p>";
        } else  {
            echo " <strong>La sentenciooa es false</strong> ";
        }
        ?>

    </section>

    <section>
        <h2>Lo que es aceptable</h2>
        <?php if($varibale_booleana) {?>
            <p>La sentencia es true</p>
        <?php } else {?>
            <strong>La sentenciooa es false</strong>
        <?php } ?>

    </section>

    <section>
        <h2>Lo que si se debe de hacer</h2>
        <?php if(true): ?>
            <p>La sentencia es true, Bienvenido</p>
        <?php else: ?>
            <strong>La sentenciooa es false</strong>
        <?php endif ?>

    </section>

</body>
</html>