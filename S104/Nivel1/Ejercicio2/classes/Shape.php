<?php
    class Shape {
        //encapsulamento
        protected $ancho;
        protected $alto;

        //construtor
        public function __construct($ancho, $alto) {
            $this->ancho = $ancho;
            $this->alto = $alto;
        }

        //polimorfismo
        public function area(){
            echo "metodo implementado por subclase\n";
        }
    }
?>