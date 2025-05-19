<?php
require_once 'ShapeInterface.php';

// implementa a interface ShapeInterface
class Circulo implements ShapeInterface {
    private $raio;

    // Construtor recebe o raio
    public function __construct($raio) {
        $this->raio = $raio;
    }

    // implemento de area() pro círculo ok
    public function area() {
        return pi() * pow($this->raio, 2);
    }
}
?>