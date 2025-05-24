<?php
    
    require_once __DIR__ . '/../numberChecker.php';

    use PHPUnit\Framework\TestCase;

    // testes para NumberChecker
    class NumberCheckerTest extends TestCase {
        // ver se 2 e par ok
        public function testNumeroPar(): void {
            $checker = new NumberChecker(2);
            // isEven() retorna true para 2? ok
            $this->assertTrue(
                $checker->isEven(),
                'El número 2 debe ser par.'
            );
        }

        // ver se 3 eh impar ok
        public function testNumeroImpar(): void {
            $checker = new NumberChecker(3);
            // isEven() retorna false para 3? ok
            $this->assertFalse(
                $checker->isEven(),
                'El número 3 no debe ser par.'
            );
        }

        // ver se 5 eh positivo
        public function testNumeroPositivo(): void {
            $checker = new NumberChecker(5);
            // isPositive() retorna true para 5? ok
            $this->assertTrue(
                $checker->isPositive(),
                'El número 5 debe ser positivo.'
            );
        }

        // ver se -1 esta como negtivo ok
        public function testNumeroNegativo(): void {
            $checker = new NumberChecker(-1);
            // isPositive() retorna false para -1? ok
            $this->assertFalse(
                $checker->isPositive(),
                'El número -1 no debe ser positivo.'
            );
        }

        // 0 eh positivo?
        public function testNumeroCero(): void {
            $checker = new NumberChecker(0);
            // isPositive() retorna false 0? ok
            $this->assertFalse(
                $checker->isPositive(),
                'El número 0 no debe considerarse positivo.'
            );
        }
    }
?>