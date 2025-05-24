<?php

    require_once __DIR__ . '/../enums/TipoCombustible.php';
    require_once __DIR__ . '/../interfaces/Impulsable.php';
    require_once __DIR__ . '/../traits/Turbo.php';

    class Car implements Impulsable
    {
        
        use Turbo;

        private string $marca;
        private string $placa;
        private TipoCombustible $combustivel;
        private int $velocidadeMaxima;

        public function __construct(
            string $marca,
            string $placa,
            TipoCombustible $combustivel,
            int $velocidadeMaxima
        ) {
            $this->marca = $marca;
            $this->placa = $placa;
            $this->combustivel = $combustivel;
            $this->velocidadeMaxima = $velocidadeMaxima;
        }

        public function mostrarEspecificacoes(): void
        {
            echo "Marca: {$this->marca}\n";
            echo "Placa: {$this->placa}\n";
            echo "Combustible: {$this->combustivel->value}\n";
            echo "Velocidad máxima: {$this->velocidadeMaxima} km/h\n";
        }

        public function ativarTurbo() {
            $this->boost();
        }
    }
?>