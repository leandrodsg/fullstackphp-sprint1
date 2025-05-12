<?php
    require_once 'Shape.php';

    //heranca
    class Rectangle extends Shape {
        
        //polimorfismo
        public function area(){
            $resultado = ($this->ancho * $this->alto);
            echo "Área del rectangulo: $resultado\n";
        }
    }
?>
