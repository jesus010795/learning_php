# Parametros por referencia

En PHP los arametros por referencia permiten que un funcion modique el valor de las variables que se le pasan como argumentos. Cuando se pasa un parametro por referencia, en lugar de pasar una copia del valor de la varible, se psa la propia variable. Esto significa que alquier cambio realizado en el parametro dentro de la funcion afectara a la variable original fuera de la funcion.

para pasar un parametro por referencia, se utiliza el simbolo `&` antes del nombre del parametro.

- Ejmplo

```
function incrementar_valor(&$valor)
{
    $valor ++;
}

$numero = 10;

incrementar_valor($numero);

echo $numero; // 11
echo "\n";

```

- La funcion `incrementar_valor` toma un parametro `$valor` por referencia. la funcion simplemente incrementa el valor del parametro en 1.
- Se define una variable llamada numero a la cual se le asignara el valor de 10.
- Se llama a la funcion incrementar_valor pasando `$numero` por referencia. Esto significa que cualquier cambio hecho a `$valor` dentro de la funcion afectara a `$numero`.


>El uso de parámetros por referencia puede ser útil cuando necesitas que una función modifique directamente los valores de las variables pasadas, por ejemplo, para optimización (evitar copias de grandes estructuras de datos) o cuando es necesario que una función devuelva múltiples valores. Sin embargo, se debe usar con cuidado, ya que puede hacer el código más difícil de entender y mantener.