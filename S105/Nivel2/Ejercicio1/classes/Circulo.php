<?php
    require_once 'Shape.php';

    //herança
    class Circulo extends Shape {
    // construtor so com o raio ok
    public function __construct($raio) {
        // raio como largura sem altura
        parent::__construct($raio, 0);
    }

    //polimorfismo
    public function area() {
        $raio = $this->ancho;
        return pi() * pow($raio, 2);
    }
}
?>
