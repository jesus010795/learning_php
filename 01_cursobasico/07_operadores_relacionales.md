# Operadores relacionales

Los operadores relacionales en PHP se utilizan para comparar dos valores y determinar la relación entre ellos. Estos operadores devuelven un valor booleano (true o false) que indica si la comparación es verdadera o falsa. Aquí tienes una lista de los operadores relacionales más comunes en PHP:

- **Igual a (==)**:
Comprueba si dos valores son iguales.

```
$x = 5;
$y = 5;
if ($x == $y) {
    echo "x es igual a y";
}
```

- **Idéntico a (===)**:

Comprueba si dos valores son iguales y del mismo tipo.

```
$x = 5;
$y = "5";
if ($x === $y) {
    echo "x es igual a y y del mismo tipo";
}
```

- **Diferente de (!= o <>)**

Comprueba si dos valores son diferentes.

```
$x = 5;
$y = 10;
if ($x != $y) {
    echo "x no es igual a y";
}
```

- **No idéntico a (!==)**

Comprueba si dos valores son diferentes o del mismo tipo.

```
$x = 5;
$y = "5";
if ($x !== $y) {
    echo "x no es igual a y o no son del mismo tipo";
}
```

- **Mayor que (>)**
Comprueba si un valor es mayor que otro.

```
$x = 10;
$y = 5;
if ($x > $y) {
    echo "x es mayor que y";
}
```

- **Mayor o igual que (>=)**

Comprueba si un valor es mayor o igual que otro.

```
$x = 10;
$y = 10;
if ($x >= $y) {
    echo "x es mayor o igual que y";
}
```

- **Menor que (<)**

Comprueba si un valor es menor que otro.

```
$x = 5;
$y = 10;
if ($x < $y) {
    echo "x es menor que y";
}
```

- **Menor o igual que (<=)**

Comprueba si un valor es menor o igual que otro.

```
$x = 5;
$y = 5;
if ($x <= $y) {
    echo "x es menor o igual que y";
}
```

- **Operador nave espacial**

El operador "nave espacial" en PHP, representado por <=>, es un operador de comparación que se introdujo en PHP 7.

Este operador se utiliza para comparar dos expresiones. Retorna un valor negativo si el primer operando es menor que el segundo, un valor positivo si el primer operando es mayor que el segundo, y cero si son iguales.

Aquí tienes un ejemplo de cómo se utiliza:

```
$a = 5;
$b = 10;

$resultado = $a <=> $b;

if ($resultado < 0) {
    echo "$a es menor que $b";
} elseif ($resultado > 0) {
    echo "$a es mayor que $b";
} else {
    echo "$a es igual a $b";
}
```
*En este ejemplo, `$resultado` contendrá -1  porque `$a` es menor que `$b`. El operador "nave espacial" devuelve -1 cuando el primer operando es menor que el segundo, 1 cuando es mayor y 0 cuando son iguales.*

- **Operador fusion de null ??**


El operador de fusión de nulos en PHP, representado por ??, se introdujo en PHP 7.

Este operador se utiliza para simplificar la forma de acceder a valores que podrían ser nulos. Proporciona un valor de respaldo en caso de que el valor de la variable sea nulo.

```
$nombre = $nombre_usuario ?? "Invitado";

echo $nombre;
```

En este ejemplo, si `$nombre_usuario` es nulo, entonces se utilizará `"Invitado"` como valor predeterminado para la variable `$nombre`. Este operador es útil cuando necesitas manejar valores nulos de una manera más concisa y legible.