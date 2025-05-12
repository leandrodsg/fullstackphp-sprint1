<?php
    class PokerDice {
        
        private $ultimaFigura;

        private static $figuras = ['As', 'K', 'Q', 'J', '7', '8'];

        private static $totalJogadas = 0;

        public function throw(){
            $indice = rand(0,5);

            $this->ultimaFigura = self::$figuras[$indice];

            self::$totalJogadas++;
        }

        public function shapeName(){
            return $this->ultimaFigura;
        }

        public static function getTotalThrows() {
            return self::$totalJogadas;
        } 

    }
?>