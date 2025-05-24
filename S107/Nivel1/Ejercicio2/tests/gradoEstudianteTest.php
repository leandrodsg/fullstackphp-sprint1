<?php
    
    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../src/gradoEstudiante.php';

    class GradoEstudianteTest extends TestCase {
        public function testPrimeraDivision() {
            $this->assertEquals("Primera División", gradoEstudiante(85));
        }
        public function testSegundaDivision() {
            $this->assertEquals("Segunda División", gradoEstudiante(59));
            $this->assertEquals("Segunda División", gradoEstudiante(45)); 
        }

        public function testTerceraDivision() {
            $this->assertEquals("Tercera División", gradoEstudiante(44));
            $this->assertEquals("Tercera División", gradoEstudiante(33)); 
        }

        public function testReprobara() {
            $this->assertEquals("Reprobará", gradoEstudiante(32));
        }
    }
?>