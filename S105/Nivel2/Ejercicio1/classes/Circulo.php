<?php
    require_once 'Shape.php';

    class Circulo extends Shape {
    
    public function __construct($raio) {
        parent::__construct($raio, 0);
    }

    public function area() {
        $raio = $this->ancho;
        return pi() * pow($raio, 2);
    }
}
?>
