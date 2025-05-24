<?php

    use PHPUnit\Framework\TestCase;

    require_once 'gradoEstudiante.php';

    class GradoEstudianteTest extends TestCase
    {
        /**
         * @dataProvider notasProveedor
         */
        public function testGradoEstudiante($nota, $esperado)
        {
            $resultado = gradoEstudiante($nota);
            $this->assertEquals($esperado, $resultado, "Erro ao testar nota $nota");
        }

        public static function notasProveedor()
        {
            return [
                'nota alta - Primera División' => [85, 'Primera División'],
                'límite superior - Segunda División' => [59, 'Segunda División'],
                'límite inferior - Segunda División' => [45, 'Segunda División'],
                'límite superior - Tercera División' => [44, 'Tercera División'],
                'límite inferior - Tercera División' => [33, 'Tercera División'],
                'abaixo do mínimo - Reprobará' => [32, 'Reprobará'],
            ];
        }
    }
?>