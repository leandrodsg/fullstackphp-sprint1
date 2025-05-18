<?php
    
    abstract class Shape {
        // encapsulamento
        protected $ancho;
        protected $alto;

        // construtor pra largura e altura ok
        public function __construct($ancho, $alto) {
            $this->ancho = $ancho;
            $this->alto = $alto;
        }

        // polimorfismo
        abstract public function area();
    }
?>
