# Evitar el codigo espaguetti

PHP es un lenguaje muy propenso a crear codigo espagueti, ya que este es demasiado permisivo, por lo que es recomendable seguir buenas practicas a la hora de crear el codigo.

- Usar nombres de variables descriptivos a lo que almacena
- No combinar logica PHP con HTML
- Usar las etiquetas diseñadas de PHP para imprimir en HTML
- Si solo cuentas con un archivo, colocar toda la logica de PHP hasta arriba del documento
- No abusar de la libertad que nos brinda PHP

# Refactorizacion

Pasamos de un codigo espagueti a un codigo mas legible y amigable

- Lo que no se debe hacer

```
<ul>
    <?php

    for ($i = 0; $i < 10; $i++) {
        echo "<li>" . "9 x 1 = " . (9 * ($i + 1)) . "</li>";
    }

    ?> 
</ul>
```


## Refactorizando

En este ejemplo se ve como se ha ido refactorizando el codigo pra recorrer un array simple y mostrar todos sus elementos en una lista de html, pasando desde el codigo menos legible hasta llegar a un codigo completamente legible y separando muy bien la logica de php con el frontend del html.

```
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

        <!-- MEJOR CODIGO Y REFACTORIZACION FINAL--->
        <ul>
            <?php foreach ($tabla_9 as $result): ?>
                <li><?= $result ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>
```
