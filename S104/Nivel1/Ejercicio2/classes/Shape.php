<?php
    class Shape {
        
        protected $ancho;
        protected $alto;

        public function __construct($ancho, $alto) {
            $this->ancho = $ancho;
            $this->alto = $alto;
        }

        public function area(){
            echo "metodo implementado por subclase\n";
        }
    }
?>