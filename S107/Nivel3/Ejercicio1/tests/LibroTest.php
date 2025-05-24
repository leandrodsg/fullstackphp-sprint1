<?php

    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../src/Libro.php';

    use App\Libro;

    class LibroTest extends TestCase
    {
        /**
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

        public static function livrosExemplo()
        {
            return [
                'livro básico' => ["O Hobbit", "J.R.R. Tolkien", "123", "Fantàstic", 310],
                'livro longo' => ["Duna", "Frank Herbert", "456", "Ciència-ficció", 604],
            ];
        }
    }
?>