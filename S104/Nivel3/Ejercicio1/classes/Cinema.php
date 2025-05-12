<?php
    require_once 'Pelicula.php';

    class Cinema {
        
        private $nombre;
        private $ciudad;

        private $peliculas;

        public function __construct($nombre, $ciudad) {
            $this->nombre = $nombre;
            $this->ciudad = $ciudad;
            $this->peliculas = [];
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function agregarPelicula(Pelicula $pelicula) {
            $this->peliculas[] = $pelicula;
        }

        public function mostrarPeliculas() {
            echo "Cine: {$this->nombre} ({$this->ciudad})\n";
            foreach ($this->peliculas as $pelicula) {
                $pelicula->mostrar();
            }
            echo "--------------------------\n";
        }

        public function getPeliculaMasLarga() {
            $mayor = null;
            foreach ($this->peliculas as $pelicula) {
                if ($mayor === null || $pelicula->getDuracion() > $mayor->getDuracion()) {
                    $mayor = $pelicula;
                }
            }
            return $mayor;
        }

        public function getPeliculas() {
            return $this->peliculas;
        }
    }
?>
