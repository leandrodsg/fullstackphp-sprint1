<?php
    
    abstract class Animal {
        
        protected $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        abstract public function makeSound();
    }
?>
