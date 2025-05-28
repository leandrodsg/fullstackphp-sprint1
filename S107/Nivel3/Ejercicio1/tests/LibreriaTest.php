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
        // testar add dois livros com mesmo titulo e isbn dif
        public function testAdicionarLivrosComMesmoTitulo()
        {
            $libreria = new Libreria();
            $livro1 = new Libro("Duplicado", "Autor 1", "001", "Aventuras", 200);
            $livro2 = new Libro("Duplicado", "Autor 2", "002", "Fantàstic", 300);

            $libreria->adicionarLivro($livro1);
            $libreria->adicionarLivro($livro2);

            $resultados = $libreria->buscarPorTitulo("Duplicado");
            $this->assertCount(2, $resultados);
        }

        // testar remover livro que nao existe
        public function testRemoverLivroInexistente()
        {
            $libreria = new Libreria();
            $resultado = $libreria->removerLivro("999");
            $this->assertFalse($resultado);
        }

        // testar buscar por genero que nao existe
        public function testBuscarGeneroInvalido()
        {
            $libreria = new Libreria();
            $livro = new Libro("Valido", "Autor", "123", "Conte", 150);
            $libreria->adicionarLivro($livro);

            $resultados = $libreria->buscarPorGenero("Romance");
            $this->assertEmpty($resultados);
        }

        // testar add livro com pag < 0
        public function testLivroComPaginasNegativas()
        {
            $libreria = new Libreria();
            $livro = new Libro("Erro de página", "Autor X", "998", "Ciència-ficció", -20);

            $libreria->adicionarLivro($livro);
            $adicionados = $libreria->obterLivros();

            $this->assertEquals(-20, $adicionados["998"]->getPaginas());
        }

        // testar add livro campos vazios
        public function testLivroComCamposVazios()
        {
            $libreria = new Libreria();
            $livro = new Libro("", "", "997", "", 100);

            $libreria->adicionarLivro($livro);
            $adicionados = $libreria->obterLivros();

            $this->assertEquals("", $adicionados["997"]->getTitulo());
            $this->assertEquals("", $adicionados["997"]->getAutor());
            $this->assertEquals("", $adicionados["997"]->getGenero());
        }

        // testar add livro com genero fora da lista
        public function testGeneroNaoListato()
        {
            $libreria = new Libreria();
            $livro = new Libro("Romântico", "Autor Z", "996", "Romance", 250);

            $libreria->adicionarLivro($livro);
            $encontrado = $libreria->buscarPorGenero("Romance");

            $this->assertCount(1, $encontrado);
        }

        // testar buscar por autor que nnao existe
        public function testBuscarAutorInexistente()
        {
            $libreria = new Libreria();
            $livro = new Libro("Algo", "Autor Y", "995", "Conte", 100);
            $libreria->adicionarLivro($livro);

            $resultado = $libreria->buscarPorAutor("Desconhecido");
            $this->assertEmpty($resultado);
        }
    }