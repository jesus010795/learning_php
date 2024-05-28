# Evitar el codigo espaguetti

PHP es un lenguaje muy propenso a crear codigo espagueti, ya que este es demasiado permisivo, por lo que es recomendable seguir buenas practicas a la hora de crear el codigo.

- Usar nombres de variables descriptivos a lo que almacena
- No combinar logica PHP con HTML
- Usar las etiquetas diseñadas de PHP para imprimir en HTML
- Si solo cuentas con un archivo, colocar toda la logica de PHP hasta arriba del documento
- No abusar de la libertad que nos brinda PHP

# Refactorizando

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