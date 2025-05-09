# Ejercicio 2 - Nivel 1

## Enunciado

Imprimir por pantalla `"Hello, World!"` utilizando una variable.  
A continuación, realiza las siguientes operaciones:

- Transformar el texto a **mayúsculas**
- Transformar el texto a **minúsculas**
- Imprimir el texto en **negrita**
- Imprimir el texto **al revés**
- Concatenar con la frase `"Aquest és el curs de PHP"` y mostrar el resultado

## Objetivo

Practicar la manipulación de strings en PHP mediante funciones nativas y la visualización por pantalla con formato HTML.

## Código de ejemplo

<?php
$mensaje = "Hello, World!";

echo "<strong>$mensaje</strong><br>";
echo "Mayúsculas: " . strtoupper($mensaje) . "<br>";
echo "Minúsculas: " . strtolower($mensaje) . "<br>";
echo "Invertido: " . strrev($mensaje) . "<br>";

$mensaje_final = $mensaje . " - Aquest és el curs de PHP";
echo "<br>" . $mensaje_final;