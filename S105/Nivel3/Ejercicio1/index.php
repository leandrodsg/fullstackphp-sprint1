<?php
    require_once __DIR__ . '/classes/Triangle.php';
    require_once __DIR__ . '/classes/Rectangle.php';
    require_once __DIR__ . '/classes/Circulo.php';

    $formas = [
        new Triangle(10, 5),
        new Rectangle(10, 5),
        new Circulo(7)
    ];

    foreach ($formas as $forma) {
        echo "Área: " . $forma->area() . "\n";
    }
?>
