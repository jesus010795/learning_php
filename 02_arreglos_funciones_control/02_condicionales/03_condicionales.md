# Condicionales *if* *else* *elseif*

La estructura de control if, else, elseif en PHP te permite tomar decisiones condicionales en tu código. Aquí te explico cómo funciona:

## if: 
La palabra clave if es la primera parte de la estructura condicional. Evalúa una condición y ejecuta un bloque de código si esa condición es verdadera.

```
if ($condicion) {
    // Este bloque de código se ejecuta si la condición es verdadera
}
```

## else: 

La palabra clave else es opcional y se usa después de un bloque de código if. Si la condición evaluada en el if es falsa, se ejecuta el bloque de código dentro del else.
```
if ($condicion) {
    // Este bloque de código se ejecuta si la condición es verdadera
} else {
    // Este bloque de código se ejecuta si la condición es falsa
}
```
## elseif: 

La palabra clave elseif te permite agregar condiciones adicionales a tu estructura condicional. Puedes tener múltiples elseif después de un if, antes de un else, o entre un if y un else.

```
if ($condicion1) {
    // Este bloque de código se ejecuta si la condición1 es verdadera
} elseif ($condicion2) {
    // Este bloque de código se ejecuta si la condicion1 es falsa y la condicion2 es verdadera
} elseif ($condicion3) {
    // Este bloque de código se ejecuta si la condicion1 y la condicion2 son falsas y la condicion3 es verdadera
} else {
    // Este bloque de código se ejecuta si ninguna de las condiciones anteriores es verdadera
}
```

Cuando se encuentra un if, PHP evalúa la condición. Si la condición es verdadera, se ejecuta el bloque de código dentro del if y se salta cualquier elseif o else que siga. Si la condición es falsa, PHP pasa a la siguiente estructura condicional (elseif o else) y evalúa su condición, y así sucesivamente.

Puedes usar if, elseif, y else juntos para manejar diferentes casos y tomar decisiones en tu código según las condiciones dadas.