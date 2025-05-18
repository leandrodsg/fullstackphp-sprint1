<?php
    require_once 'Shape.php';

    //heranca
    class Triangle extends Shape {

        //polimorfismo
        public function area(){
            return ($this->ancho * $this->alto) / 2;
        }
    }
?>