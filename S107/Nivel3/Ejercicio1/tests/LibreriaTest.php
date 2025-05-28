<?php

    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../src/Libro.php';
    require_once __DIR__ . '/../src/Libreria.php';

    use App\Libro;
    use App\Libreria;

    class LibreriaTest extends TestCase
    {
        public function testAdicionarLivro()
        {
            $libreria = new Libreria();
            $livro = new Libro("1984", "George Orwell", "111", "Distopia", 328);

            $libreria->adicionarLivro($livro);
            $todos = $libreria->obterLivros();

            $this->assertArrayHasKey("111", $todos);
            $this->assertEquals("1984", $todos["111"]->getTitulo());
        }

        public function testRemoverLivro()
        {
            $libreria = new Libreria();
            $livro = new Libro("Drácula", "Bram Stoker", "222", "Fantástico", 418);

            $libreria->adicionarLivro($livro);
            $removido = $libreria->removerLivro("222");

            $this->assertTrue($removido);
            $this->assertArrayNotHasKey("222", $libreria->obterLivros());
        }

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

        public function testBuscarPorTitulo()
        {
            $libreria = new Libreria();
            $livro = new Libro("Coraline", "Neil Gaiman", "444", "Paranormal", 180);

            $libreria->adicionarLivro($livro);
            $resultado = $libreria->buscarPorTitulo("Coraline");

            $this->assertCount(1, $resultado);
            $this->assertEquals("Neil Gaiman", $resultado[0]->getAutor());
        }

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

        
        public function testRemoverLivroInexistente()
        {
            $libreria = new Libreria();
            $resultado = $libreria->removerLivro("999");
            $this->assertFalse($resultado);
        }


        public function testBuscarGeneroInvalido()
        {
            $libreria = new Libreria();
            $livro = new Libro("Valido", "Autor", "123", "Conte", 150);
            $libreria->adicionarLivro($livro);

            $resultados = $libreria->buscarPorGenero("Romance");
            $this->assertEmpty($resultados);
        }

        
        public function testLivroComPaginasNegativas()
        {
            $libreria = new Libreria();
            $livro = new Libro("Erro de página", "Autor X", "998", "Ciència-ficció", -20);

            $libreria->adicionarLivro($livro);
            $adicionados = $libreria->obterLivros();

            $this->assertEquals(-20, $adicionados["998"]->getPaginas());
        }

        
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

        
        public function testGeneroNaoListato()
        {
            $libreria = new Libreria();
            $livro = new Libro("Romântico", "Autor Z", "996", "Romance", 250);

            $libreria->adicionarLivro($livro);
            $encontrado = $libreria->buscarPorGenero("Romance");

            $this->assertCount(1, $encontrado);
        }

        
        public function testBuscarAutorInexistente()
        {
            $libreria = new Libreria();
            $livro = new Libro("Algo", "Autor Y", "995", "Conte", 100);
            $libreria->adicionarLivro($livro);

            $resultado = $libreria->buscarPorAutor("Desconhecido");
            $this->assertEmpty($resultado);
        }
    }