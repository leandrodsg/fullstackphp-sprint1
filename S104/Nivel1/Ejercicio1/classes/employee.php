<?php

    class Employee {
        private $nombre;
        private $salario;

        public function __construct($nombre, $salario) {
            $this->nombre = $nombre;
            $this->salario = $salario;
        }

        public function print() {
            echo "Nombre: {$this->nombre}\n";
            if ($this->salario > 6000) {
                echo "Debe pagar impuestos.\n";
            } else {
                echo "No debe pagar impuestos.\n";
            }
        }
    }