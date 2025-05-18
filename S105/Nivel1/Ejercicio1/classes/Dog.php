<?php
    require_once 'Animal.php';

    // herança
    class Dog extends Animal {
        
        // polimorfismo com o som do dog aqui
        public function makeSound() {
            echo "Auu, Auu!\n";
        }
    }
?>
