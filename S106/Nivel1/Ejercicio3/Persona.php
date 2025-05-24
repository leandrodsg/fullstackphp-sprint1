<?php

    class Persona
    {
        private $nombre;
        private $edad;

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function __toString() {
            return "Nombre: $this->nombre, Edad: $this->edad";
        }

        public function __get($propiedad) {
            if (property_exists($this, $propiedad)) {
                return $this->$propiedad;
            } else {
                return "Propiedad '$propiedad' no existe";
            }
        }
    }
?>