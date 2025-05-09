# Ejercicio 3 - Nivel 1

## Enunciado

Declara dos variables `X` y `Y` de tipo `int`, y dos variables `N` y `M` de tipo `double`.  
Muestra por pantalla:

- El valor de cada variable  
- La suma  
- La resta  
- El producto  
- El módulo

Repite lo mismo para `N` y `M`.

Luego, para todas las variables, muestra:
- El doble de cada variable  
- La suma de todas  
- El producto de todas

Crea también una función `Calculadora` que reciba dos números y un tercer parámetro que indique la operación (`+`, `-`, `*`, `/`).

## Código de ejemplo

<?php
function Calculadora($a, $b, $operacion) {
    switch ($operacion) {
        case '+': return $a + $b;
        case '-': return $a - $b;
        case '*': return $a * $b;
        case '/': return $b != 0 ? $a / $b : "División por cero";
        default: return "Operación inválida";
    }
}
