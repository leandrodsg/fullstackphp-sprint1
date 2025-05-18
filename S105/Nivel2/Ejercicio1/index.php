<?php

    require_once __DIR__ . '/classes/Shape.php';
    require_once __DIR__ . '/classes/Triangle.php';
    require_once __DIR__ . '/classes/Rectangle.php';
    require_once __DIR__ . '/classes/Circulo.php';

    $triangulo = new Triangle(10,5);
    echo "Área do triângulo: " . $triangulo->area() . "\n";

    $rectangulo = new Rectangle(10, 5);
    echo "Área do retângulo: " . $rectangulo->area() . "\n";

    $circulo = new Circulo(7); 
    echo "Área do círculo: " . $circulo->area() . "\n";
?>