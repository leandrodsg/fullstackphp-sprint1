<?php
    require_once 'ShapeInterface.php';

    class Triangle implements ShapeInterface {
        private $base;
        private $altura;

        public function __construct($base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
        }

        public function area() {
            return ($this->base * $this->altura) / 2;
        }
    }
?>