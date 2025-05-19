<?php
    require_once 'ShapeInterface.php';

    class Circulo implements ShapeInterface {
        private $raio;

        public function __construct($raio) {
            $this->raio = $raio;
        }

        public function area() {
            return pi() * pow($this->raio, 2);
        }
    }
?>