# Condicionales

Con el uso de condicionales podemos generar paginas todavia mas dinamicas

- **Lo que no se debe hacer**

Esta forma de escribir codigo auqnue es valida, no se debe hacer ya que genera una lectura muy confusa y nos acerca al desarrollo de codigo espaghetti

```
<?php 
$varibale_booleana = false;
?>
```
```
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
```

- **Lo que es aceptable**

De esta forma agregamos mas etiquetas php de apertura y cierre y dependiendo la condicion ejecutaremos codigo html mas no la funcion echo, lo que hace un poco mas legible el codigo.

```
<section>
    <h2>Lo que es aceptable</h2>
    <?php if($varibale_booleana) {?>
        <p>La sentencia es true</p>
    <?php } else {?>
        <strong>La sentenciooa es false</strong>
    <?php } ?>

</section>
```

- **Lo que si se debe de hacer**

```

```