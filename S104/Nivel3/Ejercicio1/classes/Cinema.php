<?php
    require_once 'Pelicula.php';

    class Cinema {
        // encapsulamento
        private $nombre;
        private $ciudad;

        // compioscao
        private $peliculas;

        // Validación
        public function __construct($nombre, $ciudad) {
            $this->nombre = $nombre;
            $this->ciudad = $ciudad;
            $this->peliculas = [];
        }

        // getter
        public function getNombre() {
            return $this->nombre;
        }

        // composicao e agrega ok
        public function agregarPelicula(Pelicula $pelicula) {
            $this->peliculas[] = $pelicula;
        }

        // reutilizar aproveita a logica e nao duplica ok
        public function mostrarPeliculas() {
            echo "Cine: {$this->nombre} ({$this->ciudad})\n";
            foreach ($this->peliculas as $pelicula) {
                $pelicula->mostrar();
            }
            echo "--------------------------\n";
        }

        // reutilizar aproveita a logica e nao duplica ok
        public function getPeliculaMasLarga() {
            $mayor = null;
            foreach ($this->peliculas as $pelicula) {
                if ($mayor === null || $pelicula->getDuracion() > $mayor->getDuracion()) {
                    $mayor = $pelicula;
                }
            }
            return $mayor;
        }

        // reutilizar aproveita a logica e nao duplica ok
        public function getPeliculas() {
            return $this->peliculas;
        }
    }
?>
