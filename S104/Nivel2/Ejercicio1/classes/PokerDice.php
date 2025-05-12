<?php
    class PokerDice {
        //encapsulamento
        private $ultimaFigura;

        //compartilhado por todos
        private static $figuras = ['As', 'K', 'Q', 'J', '7', '8'];

        //compartilhado por todos
        private static $totalJogadas = 0;

        public function throw(){
            $indice = rand(0,5);

            $this->ultimaFigura = self::$figuras[$indice];

            // acessando classe diretamente
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