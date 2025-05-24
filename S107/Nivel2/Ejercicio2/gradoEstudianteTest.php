<?php

    use PHPUnit\Framework\TestCase;

    require_once 'gradoEstudiante.php';

    // testes para gradoEstudiante ok
    class GradoEstudianteTest extends TestCase
    {
        /**
         * @dataProvider notasProveedor
         */
        public function testGradoEstudiante($nota, $esperado)
        {
            // teste com a nota atual
            $resultado = gradoEstudiante($nota);

            // teste se  resultado retornado = esperado ok
            $this->assertEquals($esperado, $resultado, "Erro ao testar nota $nota");
        }

        /**
         * dados de teste
         * array com a entrada (nota) e saida (divisao) ok
         */
        public static function notasProveedor()
        {
            return [
                // nota alta "Primera División"
                'nota alta - Primera División' => [85, 'Primera División'],

                // Segunda División de 45 ate 59 ok
                'límite superior - Segunda División' => [59, 'Segunda División'],
                'límite inferior - Segunda División' => [45, 'Segunda División'],

                // Tercera División de 33 ate 44
                'límite superior - Tercera División' => [44, 'Tercera División'],
                'límite inferior - Tercera División' => [33, 'Tercera División'],

                // abaixo de 33 reprovar ok
                'abaixo do mínimo - Reprobará' => [32, 'Reprobará'],
            ];
        }
    }
?>