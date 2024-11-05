# Redirecciones

- Funcion `header()`

    En el modelo cliente-servidor es comun querer enviar informacion extra (autenticacion, control de cookies, control de cache, etc). Esto lo podemos hacer con la funcion header

    Tambien es muy util cuando se necesita redirigir a los ususarios a otra pagina.

    - Redireccion

    Para redirigir a los usuarios a otra pagina se usa `header` con el encabezado `Location`

    ```
    header("Location: https://www.ejemplo.com")
    ```

- Consideraciones

    Los ecabezados siempre deben ser enviados antes de enviar el cuerpo de la peticion, es decir, antes de mandar el contenido. Eso quiere decir que, si imprimes HTML o cualquier otra cosa que genere cuerpo, al intentar redirigir con header obtendras un error.