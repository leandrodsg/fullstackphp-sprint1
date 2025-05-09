# Ejercicio 1 - Nivel 2

## Enunciado

Escribe una función que calcule el total a pagar por una llamada telefónica siguiendo estas reglas:

- Toda llamada que dure menos de 3 minutos cuesta **10 céntimos**
- Cada minuto adicional (a partir del 4º) cuesta **5 céntimos por minuto**

## Objetivo

Practicar funciones condicionales y operaciones aritméticas según condiciones.

## Código de ejemplo

<?php
function calcularCostoLlamada($minutos) {
    if ($minutos <= 3) {
        return 0.10;
    } else {
        return 0.10 + ($minutos - 3) * 0.05;
    }
}

echo "Costo: " . calcularCostoLlamada(6) . " euros";  // 0.25
