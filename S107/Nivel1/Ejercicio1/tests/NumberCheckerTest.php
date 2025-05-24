<?php
    
    require_once __DIR__ . '/../numberChecker.php';

    use PHPUnit\Framework\TestCase;

    class NumberCheckerTest extends TestCase {
        public function testNumeroPar(): void {
            $checker = new NumberChecker(2);
            $this->assertTrue(
                $checker->isEven(),
                'El número 2 debe ser par.'
            );
        }

        public function testNumeroImpar(): void {
            $checker = new NumberChecker(3);
            $this->assertFalse(
                $checker->isEven(),
                'El número 3 no debe ser par.'
            );
        }

        public function testNumeroPositivo(): void {
            $checker = new NumberChecker(5);
            $this->assertTrue(
                $checker->isPositive(),
                'El número 5 debe ser positivo.'
            );
        }

        public function testNumeroNegativo(): void {
            $checker = new NumberChecker(-1);
            $this->assertFalse(
                $checker->isPositive(),
                'El número -1 no debe ser positivo.'
            );
        }

        public function testNumeroCero(): void {
            $checker = new NumberChecker(0);
            $this->assertFalse(
                $checker->isPositive(),
                'El número 0 no debe considerarse positivo.'
            );
        }
    }
?>