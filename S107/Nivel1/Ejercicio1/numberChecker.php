<?php
    // verificar propriedades do num
    class NumberChecker {
        
        private int $numero;

        // recebe um inteiro ok
        public function __construct(int $numero) {
            $this->numero = $numero;
        }

        // true se for par ok
        public function isEven(): bool {
            return $this->numero % 2 === 0;
        }

        // true se for maior q zero ok
        public function isPositive(): bool {
            return $this->numero > 0;
        }
    }
?>