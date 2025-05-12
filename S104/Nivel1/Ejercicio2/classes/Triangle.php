<?php
    require_once 'Shape.php';

    //heranca
    class Triangle extends Shape {

        //polimorfismo
        public function area(){
            $resultado = ($this->ancho * $this->alto) / 2;
            echo "Área del triángulo: $resultado\n"; 
        }
    }
?>