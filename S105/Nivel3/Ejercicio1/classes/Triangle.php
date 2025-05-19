<?php
require_once 'ShapeInterface.php';

// implementa a interface ShapeInterface
class Triangle implements ShapeInterface {
    private $base;
    private $altura;

    // construtor com a base e altura
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    // implementação de area() pro triangulo ok
    public function area() {
        return ($this->base * $this->altura) / 2;
    }
}
?>