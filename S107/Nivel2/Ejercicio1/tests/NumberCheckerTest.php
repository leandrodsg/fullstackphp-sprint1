<?php
    
    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../numberChecker.php';

    class NumberCheckerTest extends TestCase {

        /**
         * @dataProvider numerosParaTestarSeEhPar
         */
        public function testIsEven($numero, $resultadoEsperado) {
            $verificador = new NumberChecker($numero);
            $this->assertEquals($resultadoEsperado, $verificador->isEven());
        }

        /**
         * 
         * array interno com [número de entrada, resultado esperado]
         */
        public static function numerosParaTestarSeEhPar() {
            return [
                [2, true],     
                [3, false],    
                [-4, true],    
                [-5, false],   
                [0, true]      
            ];
        }

        /**
         *
         * @dataProvider numerosParaTestarSeEhPositivo
         */
        public function testIsPositive($numero, $resultadoEsperado) {
            $verificador = new NumberChecker($numero);
            $this->assertEquals($resultadoEsperado, $verificador->isPositive());
        }

        /**
         * 
         * array internocom [número de entrada, resultado esperado]
         */
        public static function numerosParaTestarSeEhPositivo() {
            return [
                [5, true],   
                [-1, false], 
                [0, false]     
            ];
        }
    }
?>