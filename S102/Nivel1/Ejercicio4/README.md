# Ejercicio 4 - Nivel 1

## Enunciado

Crea un programa que implemente una función para contar desde 1 hasta un número dado.  
Si no se da un número, debe usar un valor por defecto (10).  
El contador debe tener un paso configurable (default: 1)  
y mostrar los números uno por uno.

## Objetivo

Practicar funciones con parámetros, valores por defecto y bucles `for`.

## Código de ejemplo

<?php
function contar($hasta = 10, $paso = 1) {
    for ($i = 1; $i <= $hasta; $i += $paso) {
        echo "$i ";
    }
}

contar();         // 1 2 3 4 5 6 7 8 9 10
contar(5);        // 1 2 3 4 5
contar(10, 2);    // 1 3 5 7 9
