<?php
require_once 'ShapeInterface.php';

// implementa a interface ShapeInterface
class Rectangle implements ShapeInterface {
    private $largura;
    private $altura;

    // construtor com a base e altura
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    // implementação de area() pro retângulo ok
    public function area() {
        return $this->largura * $this->altura;
    }
}
?>