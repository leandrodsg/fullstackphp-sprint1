<?php
    require_once 'ShapeInterface.php';

    class Rectangle implements ShapeInterface {
        private $largura;
        private $altura;

        public function __construct($largura, $altura) {
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function area() {
            return $this->largura * $this->altura;
        }
    }
?>