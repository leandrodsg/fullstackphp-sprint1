<?php
    require_once 'Shape.php';

    class Triangle extends Shape {

        public function area(){
            $resultado = ($this->ancho * $this->alto) / 2;
            echo "Área del triángulo: $resultado\n"; 
        }
    }
?>