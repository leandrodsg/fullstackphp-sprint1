<?php

    namespace App;

    class Libro
    {
        private $titulo;
        private $autor;
        private $isbn;
        private $genero;
        private $paginas;

        public function __construct($titulo, $autor, $isbn, $genero, $paginas)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->isbn = $isbn;
            $this->genero = $genero;
            $this->paginas = $paginas;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function getIsbn()
        {
            return $this->isbn;
        }

        public function getGenero()
        {
            return $this->genero;
        }

        public function getPaginas()
        {
            return $this->paginas;
        }
    }
?>