# Validacion de formularios

## Funcion isset()

La función `isset()` en PHP se utiliza para determinar si una variable está definida y no es null. Es muy útil para validar formularios, ya que permite verificar si un campo ha sido enviado antes de intentar procesarlo.

```
<form action="07_server.php" method="post">
    <label for="nombre">Nombre</label> <br>
    <input type="text"  id="nombre"><br>
    <input type="submit" value="enviar">
</form>
```

Validaremos si el campo existe por medio de la funcion isset()
```
if ( isset($_POST['nombre'])){
    echo("Nombre seteado");
} else{
    echo"No seteado";
}
```
- Se verifica si el campo name está establecido con `isset($_POST["name"])`.
- Se limpia y valida el campo.
- Si está vacío o contiene caracteres no permitidos, se establece un mensaje de error.

## Funcion empty()

La función `empty()` en PHP se utiliza para verificar si una variable está vacía. Una variable se considera vacía si no existe o si su valor es equivalente a false, incluyendo valores como 0, "" (cadena vacía), NULL, false, etc. Esta función es muy útil para la validación de formularios para asegurarse de que los campos requeridos no están vacíos.

```
if ( empty($_POST['nombre'])){
    echo("Nombre no enviado");
} else{
    echo "Nombre enviado";
}
```

- Se verifica si el campo name está vacío con empty($_POST["name"]).
- Si está vacío, se establece un mensaje de error.
- Si no está vacío, se limpia y valida el campo.
- Si contiene caracteres no permitidos, se establece un mensaje de error.

empty devuelve `true` si el campo se manda vacio.