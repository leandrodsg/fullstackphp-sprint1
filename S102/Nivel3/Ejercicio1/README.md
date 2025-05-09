# Ejercicio 1 - Nivel 3

## Enunciado

El **cribado de Eratóstenes** es un algoritmo clásico para encontrar números primos en un rango.

Implementa este algoritmo en una función que reciba un número entero positivo y devuelva todos los primos menores o iguales a ese número.

## Objetivo

Practicar lógica algorítmica, estructuras de datos y bucles con arrays.

## Código de ejemplo

<?php
function cribaEratostenes($limite) {
    $numeros = array_fill(0, $limite + 1, true);
    $numeros[0] = $numeros[1] = false;

    for ($i = 2; $i * $i <= $limite; $i++) {
        if ($numeros[$i]) {
            for ($j = $i * $i; $j <= $limite; $j += $i) {
                $numeros[$j] = false;
            }
        }
    }

    $primos = [];
    foreach ($numeros as $numero => $esPrimo) {
        if ($esPrimo) {
            $primos[] = $numero;
        }
    }

    return $primos;
}

print_r(cribaEratostenes(30));
