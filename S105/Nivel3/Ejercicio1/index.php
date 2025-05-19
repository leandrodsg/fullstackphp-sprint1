<?php

    require_once __DIR__ . '/classes/ShapeInterface.php';
    require_once __DIR__ . '/classes/Triangle.php';
    require_once __DIR__ . '/classes/Rectangle.php';
    require_once __DIR__ . '/classes/Circulo.php';

    //triangle
    $triangulo = new Triangle(10,5);
    echo "Área do triângulo: " . $triangulo->area() . "\n";

    //rectangle
    $rectangulo = new Rectangle(10, 5);
    echo "Área do retângulo: " . $rectangulo->area() . "\n";

    // nao conta altura
    $circulo = new Circulo(7); 
    echo "Área do círculo: " . $circulo->area() . "\n";
?>