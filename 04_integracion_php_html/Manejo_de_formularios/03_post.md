# POST

El método POST es otro método HTTP común utilizado para enviar datos a un servidor web. A diferencia del método GET, los datos enviados con POST no se codifican en la URL y no son visibles para el usuario. Esto lo hace más seguro para enviar datos confidenciales.

Es muy similar al metodo get, solo que los datos viajan "por detras", o "enmascarados".

En PHP, los datos enviados con POST se manejan utilizando la variable superglobal `$_POST`. Esta variable contiene un array asociativo de pares clave-valor que representan los datos enviados en el cuerpo de la petición.


- Html

Utilizaremos el mismo formulario utilizado en get, unicamente cambiamos el valor del atributo action y el metodo.

```
<form action="./03_server.php" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="edad">Edad</label>
    <input type="text" name="edad" id="edad">

    <input type="submit" value="Enviar">

</form>

```

- server.php

```
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
```

- **Consideraciones adicionales:**

    - Las peticiones POST no son idempotentes, lo que significa que el resultado de la petición puede cambiar si se repite varias veces con los mismos datos.
    
    - Las peticiones POST son seguras para enviar datos confidenciales, ya que los datos no se envían en la URL y no son visibles para el usuario.
    
    - Las peticiones POST no tienen un límite de tamaño para la cantidad de datos que se pueden enviar.
<br>

- 3 ejemplos adicionales del manejo del método POST en PHP:

    - Subir archivos: El método POST se utiliza comúnmente para subir archivos al servidor. El array `$_FILES` contiene información sobre los archivos subidos, como el nombre, el tamaño y la ubicación temporal.

    - Procesar pagos en línea: El método POST se utiliza para enviar datos de pago a un servidor seguro. Los datos de pago suelen estar encriptados para proteger la información confidencial.

    - Enviar datos de formularios complejos: El método POST se puede utilizar para enviar datos de formularios complejos con múltiples campos y conjuntos de datos anidados.