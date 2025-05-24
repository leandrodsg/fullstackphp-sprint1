<?php

    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../src/Libro.php';

    use App\Libro;

    // teste da entidade Livro
    class LibroTest extends TestCase
    {
        /**
         * testa livros com diferentes dados
         * @dataProvider livrosExemplo
         */
        public function testCriacaoLivro($titulo, $autor, $isbn, $genero, $paginas)
        {
            $livro = new Libro($titulo, $autor, $isbn, $genero, $paginas);

            $this->assertEquals($titulo, $livro->getTitulo(), "Erro no título");
            $this->assertEquals($autor, $livro->getAutor(), "Erro no autor");
            $this->assertEquals($isbn, $livro->getIsbn(), "Erro no ISBN");
            $this->assertEquals($genero, $livro->getGenero(), "Erro no gênero");
            $this->assertEquals($paginas, $livro->getPaginas(), "Erro nas páginas");
        }

        // dados para testar diferentes livros
        public static function livrosExemplo()
        {
            return [
                'livro básico' => ["O Hobbit", "J.R.R. Tolkien", "123", "Fantàstic", 310],
                'livro longo' => ["Duna", "Frank Herbert", "456", "Ciència-ficció", 604],
            ];
        }
    }
?>