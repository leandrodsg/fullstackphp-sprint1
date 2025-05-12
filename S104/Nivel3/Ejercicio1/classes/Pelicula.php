<?php

    class Pelicula {
        // encapsulamento
        private $nombre;
        private $duracion;
        private $director;

        // contructor precisa validar dado
        public function __construct($nombre, $duracion, $director) {
            //valida string
            if (!is_string($nombre) || !is_string($director)) {
                throw new Exception("El nombre y el director deben ser texto.");
            }

            //valida numero
            if (!is_numeric($duracion) || $duracion <= 0) {
                throw new Exception("La duración debe ser un número positivo.");
            }

            $this->nombre = $nombre;
            $this->duracion = (int)$duracion;
            $this->director = $director;
        }

        // gette
        public function getNombre() {
            return $this->nombre;
        }

        public function getDuracion() {
            return $this->duracion;
        }

        public function getDirector() {
            return $this->director;
        }

        //mostrar dados ok
        public function mostrar() {
            echo "Película: {$this->nombre}, Duración: {$this->duracion} min, Director/a: {$this->director}\n";
        }

        // teste de duplicados ok
        public function esIgualA($otra) {
            return $this->nombre === $otra->getNombre() && $this->director === $otra->getDirector();
        }
    }
?>
