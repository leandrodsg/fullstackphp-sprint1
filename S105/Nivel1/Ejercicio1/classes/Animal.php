<?php
    // Tem que ser abstrata... nao faz sentido criar animal generico se tenho os animais
    // vou usar essa classe como base pros outros animais
    abstract class Animal {
        // encapsulamiento
        protected $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        // polimorfismo
        // cada animal tem o seu makeSound()
        abstract public function makeSound();
    }
?>
