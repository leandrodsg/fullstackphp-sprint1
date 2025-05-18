<?php
    require_once 'Animal.php';

    // herança
    class Cat extends Animal {
        
        // polimorfismo com o som do gato aqui
        public function makeSound() {
            echo "Miau!\n";
        }
    }
?>
