<?php
    require_once 'Shape.php';

    class Rectangle extends Shape {
        
        public function area(){
            $resultado = ($this->ancho * $this->alto);
            echo "Área del rectangulo: $resultado\n";
        }
    }
?>
