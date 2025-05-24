<?php
    
    class NumberChecker {
        
        private int $numero;

        public function __construct(int $numero) {
            $this->numero = $numero;
        }

        public function isEven(): bool {
            return $this->numero % 2 === 0;
        }

        public function isPositive(): bool {
            return $this->numero > 0;
        }
    }
?>