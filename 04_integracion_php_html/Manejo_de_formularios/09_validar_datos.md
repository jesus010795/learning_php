# filter_var()

Aquí tenemos una lista de algunas propiedades o argumentos utilizados con la función filter_var en PHP, junto con una breve descripción y ejemplos prácticos:

`FILTER_VALIDATE_EMAIL`: Valida si una cadena es una dirección de correo electrónico válida.

```
$email = 'john@example.com';
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "La dirección de correo electrónico es válida.";
} else {
    echo "La dirección de correo electrónico no es válida.";
}
```
Output esperado: La dirección de correo electrónico es válida.


`FILTER_VALIDATE_URL`: Valida si una cadena es una URL válida.

```
$url = '<https://example.com>';
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "La URL es válida.";
} else {
    echo "La URL no es válida.";
}
```
Output esperado: La URL es válida.

`FILTER_VALIDATE_IP`: Valida si una cadena es una dirección IP válida.

```
$ip = '192.168.0.1';
if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "La dirección IP es válida.";
} else {
    echo "La dirección IP no es válida.";
}
```
Output esperado: La dirección IP es válida.

`FILTER_VALIDATE_INT`: Valida si una cadena es un número entero válido.

```
$number = '42';
if (filter_var($number, FILTER_VALIDATE_INT)) {
    echo "El número es válido.";
} else {
    echo "El número no es válido.";
}
```
Output esperado: El número es válido.

`FILTER_VALIDATE_FLOAT`: Valida si una cadena es un número de punto flotante válido.

```
$float = '3.14';
if (filter_var($float, FILTER_VALIDATE_FLOAT)) {
    echo "El número de punto flotante es válido.";
} else {
    echo "El número de punto flotante no es válido.";
}
```
Output esperado: El número de punto flotante es válido.

`FILTER_VALIDATE_BOOLEAN`: Valida si una cadena es un valor booleano válido (true o false).

```
$value = 'true';
if (filter_var($value, FILTER_VALIDATE_BOOLEAN)) {
    echo "El valor es válido.";
} else {
    echo "El valor no es válido.";
}
```
Output esperado: El valor es válido.

`FILTER_VALIDATE_REGEXP`: Valida si una cadena coincide con un patrón de expresión regular.

```
$pattern = '/^[a-zA-Z0-9]+$/';
$username = 'john123';
if (filter_var($username, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $pattern)))) {
    echo "El nombre de usuario es válido.";
} else {
    echo "El nombre de usuario no es válido.";
}
```
Output esperado: El nombre de usuario es válido.

Recuerda que estas son solo algunas de las propiedades más comunes utilizadas con filter_var. Puedes consultar la documentación oficial de PHP para obtener más información y ver todas las opciones disponibles.