<?php
    
    use PHPUnit\Framework\TestCase;

    require_once __DIR__ . '/../numberChecker.php';

    class NumberCheckerTest extends TestCase {

        /**
         * testar se sao pares
         * Usa metotodo numerosParaTestarSeEhPar
         *
         * @dataProvider numerosParaTestarSeEhPar
         */
        public function testIsEven($numero, $resultadoEsperado) {
            // novo objeto que vou testar ok
            $verificador = new NumberChecker($numero);

            // resultado retornado com o resultado esperado ok
            $this->assertEquals($resultadoEsperado, $verificador->isEven());
        }

        /**
         * teste para o testIsEven ok
         * array interno com [número de entrada, resultado esperado]
         */
        public static function numerosParaTestarSeEhPar() {
            return [
                [2, true],     // 2 é par
                [3, false],    // 3 é ímpar
                [-4, true],    // -4 é par
                [-5, false],   // -5 é ímpar
                [0, true]      // 0 é considerado par
            ];
        }

        /**
         * teste se sao positivos ok
         * dados do metodo numerosParaTestarSeEhPositivo
         *
         * @dataProvider numerosParaTestarSeEhPositivo
         */
        public function testIsPositive($numero, $resultadoEsperado) {
            // novo objeto que vou testar ok
            $verificador = new NumberChecker($numero);

            // resultado retornado com o resultado esperado ok
            $this->assertEquals($resultadoEsperado, $verificador->isPositive());
        }

        /**
         * dados do teste de testIsPositive ok
         * array internocom [número de entrada, resultado esperado]
         */
        public static function numerosParaTestarSeEhPositivo() {
            return [
                // 5 é positivo
                [5, true],
                // -1 é negativo     
                [-1, false],
                // 0 não é considerado positivo   
                [0, false]     
            ];
        }
    }
?>