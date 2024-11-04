# Scope

El scope es el contexto en donde una variable fue definida. Usualmente, la mayor parte del tiempo una variable tiene un ambito simple, es decir, esta disponible en todo el archivo e incluso en otros archivos donde se haga un `require`.

## Ambito local

Cuando empezamos a usar funciones de cualqueir variable definida dentro de la funcion, pasa a ser un ambito local.

En otras palabras, esa variable solo eciste dentro de la funcion.

> En php generalmente las viariables tendran un ambito global, sin embargo es importante saber identificar las caracteristicas del scope en el qe estan siendo creadas.

- globlal

    Utilizamos esta palabra reservada cuando queremos que una variable externa existadentro de una funcion sin necesidad de pasarla como parametro.

    ```
    $outside_var = "Esta es una variable externa"

    function my_function(){
        global $outside_var;

        echo $$outside_var;
    }

    my_function(); // Esta es una variable externa
    
    ```
