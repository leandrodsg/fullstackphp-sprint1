<?php

    namespace App;

    class Libreria
    {
        private $livros = [];

        public function adicionarLivro(Libro $livro)
        {
            $this->livros[$livro->getIsbn()] = $livro;
        }

        public function obterLivros()
        {
            return $this->livros;
        }

        public function removerLivro($isbn)
        {
            if (isset($this->livros[$isbn])) {
                unset($this->livros[$isbn]);
                return true;
            }
            return false;
        }

        public function modificarLivro($isbn, $titulo, $autor, $genero, $paginas)
        {
            if (isset($this->livros[$isbn])) {
                $novoLivro = new Libro($titulo, $autor, $isbn, $genero, $paginas);
                $this->livros[$isbn] = $novoLivro;
                return true;
            }
            return false;
        }

        public function buscarPorTitulo($titulo)
        {
            $resultado = [];
            foreach ($this->livros as $livro) {
                if ($livro->getTitulo() === $titulo) {
                    $resultado[] = $livro;
                }
            }
            return $resultado;
        }

        public function buscarPorAutor($autor)
        {
            $resultado = [];
            foreach ($this->livros as $livro) {
                if ($livro->getAutor() === $autor) {
                    $resultado[] = $livro;
                }
            }
            return $resultado;
        }

        public function buscarPorGenero($genero)
        {
            $resultado = [];
            foreach ($this->livros as $livro) {
                if ($livro->getGenero() === $genero) {
                    $resultado[] = $livro;
                }
            }
            return $resultado;
        }

        public function buscarPorIsbn($isbn)
        {
            return isset($this->livros[$isbn]) ? [$this->livros[$isbn]] : [];
        }

        public function livrosGrandes()
        {
            $resultado = [];
            foreach ($this->livros as $livro) {
                if ($livro->getPaginas() > 500) {
                    $resultado[] = $livro;
                }
            }
            return $resultado;
        }
    }
?>