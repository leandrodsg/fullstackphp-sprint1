# Ejercicio 5 - Nivel 1

## Enunciado

Escribe una función que reciba la nota de un estudiante (0-100) y muestre su calificación:

- Nota ≥ 60: Primera División  
- Nota ≥ 45: Segunda División  
- Nota ≥ 33: Tercera División  
- Menor que 33: Reprobado

## Objetivo

Practicar condicionales `if` anidados y retorno de valores con lógica estructurada.

## Código de ejemplo

<?php
function clasificarNota($nota) {
    if ($nota >= 60) return "Primera División";
    elseif ($nota >= 45) return "Segunda División";
    elseif ($nota >= 33) return "Tercera División";
    else return "Reprobado";
}

echo clasificarNota(75); // Primera División
