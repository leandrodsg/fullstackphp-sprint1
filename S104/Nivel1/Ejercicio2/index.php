<?php
    require_once 'classes/Triangle.php';
    require_once 'classes/Rectangle.php';

    $triangulo = new Triangle(10,5);
    $triangulo->area();

    $rectangulo = new Rectangle(10, 5);
    $rectangulo->area();
?>