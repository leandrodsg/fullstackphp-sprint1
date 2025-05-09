# Ejercicio 1 - Nivel 1

## Enunciado

Define una variable de cada tipo: `integer`, `double`, `string` y `boolean`.  
Imprímelas por pantalla. Luego, crea una constante con tu nombre y muéstrala como título en HTML.

## Objetivo

Practicar la declaración de variables y constantes en PHP, así como la visualización de valores en el navegador.

## Código de ejemplo

<?php
$edad = 30;
$peso = 68.5;
$apellido = "Augusto";
$activo = true;

const NOMBRE = "Josep";

echo "<h2>Descripción de " . NOMBRE . "</h2>";
echo "<br>";
echo "Nombre completo: " . NOMBRE . " " . $apellido;
echo "<br>";
echo "Edad: $edad";
echo "<br>";
echo "Peso: $peso";
echo "<br>";
echo "Activo: " . ($activo ? "Sí" : "No");