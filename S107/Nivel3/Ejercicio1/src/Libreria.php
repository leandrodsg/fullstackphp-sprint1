<?php

    namespace App;

    //classe para guardar e manipular os livros
    class Libreria
    {
        // guardar os livros com array simples ok
        private $livros = [];

        // add livro
        public function adicionarLivro(Libro $livro)
        {
            // ISBN como key ok
            $this->livros[$livro->getIsbn()] = $livro;
        }

        // livros armazenados
        public function obterLivros()
        {
            return $this->livros;
        }

        // remover livro da biblioteca pelo ISBN ok
        public function removerLivro($isbn)
        {
            if (isset($this->livros[$isbn])) {
                unset($this->livros[$isbn]);
                return true;
            }
            return false;
        }

        // modifica os livors ok
        public function modificarLivro($isbn, $titulo, $autor, $genero, $paginas)
        {
            if (isset($this->livros[$isbn])) {
                // novo livro com os dados atualizados
                $novoLivro = new Libro($titulo, $autor, $isbn, $genero, $paginas);
                $this->livros[$isbn] = $novoLivro;
                return true;
            }
            return false;
        }

        // busca livros por título
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

        // busca por autor
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

        // busca por genero
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

        // busca pelo ISBN
        public function buscarPorIsbn($isbn)
        {
            return isset($this->livros[$isbn]) ? [$this->livros[$isbn]] : [];
        }

        // livros com mais de 500 pags ok
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