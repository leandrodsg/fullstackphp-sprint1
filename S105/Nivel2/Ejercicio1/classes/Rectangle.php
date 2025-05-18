<?php
    require_once 'Shape.php';

    //heranca
    class Rectangle extends Shape {
        
        //polimorfismo
        public function area(){
            return $this->ancho * $this->alto;
        }
    }
?>
