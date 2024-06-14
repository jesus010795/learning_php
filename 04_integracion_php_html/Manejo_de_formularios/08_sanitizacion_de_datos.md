# Sanitizacion

## htmlentities

La función `htmlentities()` en PHP se utiliza para convertir caracteres especiales en entidades HTML. Esta función es útil para prevenir ataques de Cross-Site Scripting (XSS) al mostrar datos de entrada del usuario en una página web. Al convertir caracteres especiales a sus equivalentes de entidades HTML, se evita que el código malicioso sea interpretado por el navegador.

`htmlentities(string $string, int $flags = ENT_COMPAT, string $encoding = 'UTF-8', bool $double_encode = true): string`

- **Parámetros**

- `$string` (requerido): La cadena que se va a convertir.
- `$flags` (opcional): Un conjunto de banderas que afectan el comportamiento de la función. Algunos valores comunes son:
    - `ENT_COMPAT` (por defecto): Convierte solo las comillas dobles.
    - `ENT_QUOTES`: Convierte tanto comillas dobles como simples.
    - `ENT_NOQUOTES`: No convierte ninguna comilla.
    - ENT_HTM`L401, ENT_HTML5, ENT_XML1, ENT_XHTML: Especifica el tipo de documento.
- `$encoding` (opcional): El tipo de codificación de caracteres. El valor predeterminado es 'UTF-8'.
- `$double_encode` (opcional): Si se establece en false, las entidades HTML existentes no se volverán a codificar. El valor predeterminado es true.


Por ejemplo si en un input recibieramos codigo html, al querer renderizar la informacion, php lo interpretara como codigo html y no como una variable en string.

Esta funcion evita que se renderice algun elemento html a traves de un input que ha sido enviado por un usuario.

```
<?php
$string = "<a href='test'>Test</a>";
echo htmlentities($string);
// Salida: &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>
```

- **Usos Comunes**

    - Protección Contra XSS: Al mostrar datos ingresados por el usuario en una página web, htmlentities() puede ayudar a prevenir ataques XSS.

    ```
    <?php
        $user_input = "<script>alert('XSS');</script>";
        echo htmlentities($user_input);
        // Salida: &lt;script&gt;alert(&#039;XSS&#039;);&lt;/script&gt;
    ?>

    ```

    - Manejo de Datos Formateados en HTML: Si necesitas mostrar código HTML como texto en la página, htmlentities() se asegurará de que no se ejecute accidentalmente.

    ```
    <?php
        $html_code = "<h1>Title</h1>";
        echo htmlentities($html_code);
        // Salida: &lt;h1&gt;Title&lt;/h1&gt;
    ?>
    ```


## Ejemplo Completo con Formulario

A continuación, un ejemplo completo que demuestra cómo usar htmlentities() para proteger los datos de entrada del usuario en un formulario:

- Formulario HTML:

```
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Seguro</title>
</head>
<body>
    <form action="process_form.php" method="post">
        Nombre: <input type="text" name="name"><br>
        Mensaje: <textarea name="message"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

```

- Script PHP para Procesar el Formulario:

```
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
    $message = htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8');

    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . $name . "<br>";
    echo "Mensaje: " . $message . "<br>";
}
?>
```

### Explicación del Script PHP

- **Verificación del Método de Solicitud**: Se verifica que el formulario haya sido enviado mediante el método POST.
- **Limpieza de Datos de Entrada**: Se utilizan htmlentities() para convertir caracteres especiales en las entradas name y message.
- **Mostrar Datos Limpiados**: Se muestran los datos ingresados por el usuario, ahora seguros para ser renderizados en HTML.

>**Al usar htmlentities(), te aseguras de que cualquier código malicioso incluido en las entradas del usuario se convierta en texto seguro, previniendo la ejecución de scripts no deseados en la página web.**

# filter_var()


La función `filter_var()` en PHP se utiliza para filtrar y validar datos. Esta función es muy útil para sanitizar correos electrónicos y números, asegurando que los datos sean seguros y válidos antes de procesarlos o almacenarlos.

`mixed filter_var(mixed $variable, int $filter = FILTER_DEFAULT, array|int $options = 0)`

- **Parámetros**
- `$variable`: La variable que se va a filtrar.
- `$filter` (opcional): El filtro que se aplicará. Puede ser uno de los filtros predefinidos de PHP, como FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_NUMBER_INT, FILTER_VALIDATE_INT, etc.
- `$options` (opcional): Un array de opciones o una bandera. Las opciones varían según el filtro.

- **Sanitizar y Validacion de email**

    - Sanitizar un Correo Electrónico

    ```
    <?php
    $email = "john.doe@example.com<script>alert('XSS');</script>";
    $sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $sanitized_email;
    // Salida: john.doe@example.comalert('XSS');
    ?>
    ```
    En este ejemplo, filter_var() elimina los caracteres no válidos en un correo electrónico.

    - Validar un correo electronico

    La validación verifica si el formato de un correo electrónico es correcto. Para validar un correo electrónico, se utiliza FILTER_VALIDATE_EMAIL.

    ```
    <?php
    $email = "john.doe@example.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico es válido.";
    } else {
        echo "El correo electrónico no es válido.";
    }
    ?>
    ```
    En este ejemplo, filter_var() verifica si el correo electrónico tiene un formato válido.

- **Validar un Número Entero**

La validación verifica si el valor es un número entero. Para validar un número entero, se utiliza `FILTER_VALIDATE_INT`.

```
<?php
$number = "123";
if (filter_var($number, FILTER_VALIDATE_INT)) {
    echo "El número es un entero válido.";
} else {
    echo "El número no es un entero válido.";
}
?>
```

En este ejemplo, filter_var() verifica si el valor es un número entero.