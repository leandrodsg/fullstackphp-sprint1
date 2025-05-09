# Ejercicio 2 - Nivel 2

## Enunciado

Calcula el total de una compra en una tienda con los siguientes precios:

- Chocolate: 1.00€
- Chicle: 0.50€
- Caramelo: 1.50€

El usuario debe indicar la cantidad de cada producto. El programa calcula el subtotal y total final.

## Objetivo

Practicar funciones con parámetros, sumas y retorno de resultados.

## Código de ejemplo

<?php
function calcular($precio, $cantidad) {
    return $precio * $cantidad;
}

$total = calcular(1.00, 2) + calcular(0.50, 1) + calcular(1.50, 1);
echo "Total de la compra: " . $total . " euros";  // 4.0
