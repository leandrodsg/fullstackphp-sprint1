<?php

    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../src/Libro.php';
    require_once __DIR__ . '/../src/Libreria.php';

    use App\Libro;
    use App\Libreria;

    // testes da biblioteca
    class LibreriaTest extends TestCase
    {
        // livro pode ser adicionado e recuperado ok
        public function testAdicionarLivro()
        {
            $libreria = new Libreria();
            $livro = new Libro("1984", "George Orwell", "111", "Distopia", 328);

            $libreria->adicionarLivro($livro);
            $todos = $libreria->obterLivros();

            $this->assertArrayHasKey("111", $todos);
            $this->assertEquals("1984", $todos["111"]->getTitulo());
        }

        // livro pode ser  removido corretamente ok
        public function testRemoverLivro()
        {
            $libreria = new Libreria();
            $livro = new Libro("Drácula", "Bram Stoker", "222", "Fantástico", 418);

            $libreria->adicionarLivro($livro);
            $removido = $libreria->removerLivro("222");

            $this->assertTrue($removido);
            $this->assertArrayNotHasKey("222", $libreria->obterLivros());
        }

        // modificar os dados de um livro
        public function testModificarLivro()
        {
            $libreria = new Libreria();
            $livro = new Libro("Antigo", "Autor A", "333", "Aventuras", 200);

            $libreria->adicionarLivro($livro);
            $libreria->modificarLivro("333", "Novo", "Autor B", "Distopia", 350);
            $modificado = $libreria->obterLivros()["333"];

            $this->assertEquals("Novo", $modificado->getTitulo());
            $this->assertEquals("Autor B", $modificado->getAutor());
        }

        // testar a busca por titulo ok
        public function testBuscarPorTitulo()
        {
            $libreria = new Libreria();
            $livro = new Libro("Coraline", "Neil Gaiman", "444", "Paranormal", 180);

            $libreria->adicionarLivro($livro);
            $resultado = $libreria->buscarPorTitulo("Coraline");

            $this->assertCount(1, $resultado);
            $this->assertEquals("Neil Gaiman", $resultado[0]->getAutor());
        }

        // testar livros com mais de 500 ok
        public function testLivrosGrandes()
        {
            $libreria = new Libreria();
            $livro1 = new Libro("Curto", "Autor 1", "555", "Fantástico", 100);
            $livro2 = new Libro("Grande", "Autor 2", "666", "Distopia", 600);

            $libreria->adicionarLivro($livro1);
            $libreria->adicionarLivro($livro2);

            $grandes = $libreria->livrosGrandes();

            $this->assertCount(1, $grandes);
            $this->assertEquals("Grande", $grandes[0]->getTitulo());
        }
    }
?>