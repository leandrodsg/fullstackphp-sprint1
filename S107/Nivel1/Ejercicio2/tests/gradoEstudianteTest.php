<?php
    
    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../src/gradoEstudiante.php';

    // testes estende TestCase
    class GradoEstudianteTest extends TestCase {

        // se nota alta "Primera División" ok
        public function testPrimeraDivision() {
            $this->assertEquals("Primera División", gradoEstudiante(85));
        }

        // teste "Segunda División" ok
        public function testSegundaDivision() {
            // limite superior
            $this->assertEquals("Segunda División", gradoEstudiante(59));
            // limite inferior 
            $this->assertEquals("Segunda División", gradoEstudiante(45)); 
        }

        // teste "Tercera División" ok
        public function testTerceraDivision() {
            // limite superior
            $this->assertEquals("Tercera División", gradoEstudiante(44));
            // limite inferior 
            $this->assertEquals("Tercera División", gradoEstudiante(33)); 
        }

        // teste abaixo de 33 ok
        public function testReprobara() {
            $this->assertEquals("Reprobará", gradoEstudiante(32));
        }
    }
?>