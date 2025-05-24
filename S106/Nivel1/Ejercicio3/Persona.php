<?php

    // classe Persona com 2 atributos nome e idade
    // atributos privados
    class Persona
    {
        private $nombre;
        private $edad;

        // construtor com nome e idade
        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        // __toString executado quando exibe o objeto com echo ok
        // objeto com a conversao para texto
        public function __toString() {
            return "Nombre: $this->nombre, Edad: $this->edad";
        }

        // __get para acessar um atributo privado ou que nao existe
        // propriedade existindo dentro da classe ele retorna seu valor ok
        // caso nao, mostra uma mensagem que a propriedade nao existe ok
        public function __get($propiedad) {
            if (property_exists($this, $propiedad)) {
                return $this->$propiedad;
            } else {
                return "Propiedad '$propiedad' no existe";
            }
        }
    }
?>