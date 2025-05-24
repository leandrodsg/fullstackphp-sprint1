<?php
    // classes/Car.php

    require_once __DIR__ . '/../enums/TipoCombustible.php';
    require_once __DIR__ . '/../interfaces/Impulsable.php';
    require_once __DIR__ . '/../traits/Turbo.php';

    // classe Carro pode ter turbo opcional
    // implementar interface impulsable
    class Car implements Impulsable
    {
        // trait Turbo para ativar impulso
        use Turbo;

        // encapsulamento
        private string $marca;
        private string $placa;
        private TipoCombustible $combustivel;
        private int $velocidadeMaxima;

        // construtor
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

        // descricao resumida do carro ok
        public function mostrarEspecificacoes(): void
        {
            echo "Marca: {$this->marca}\n";
            echo "Placa: {$this->placa}\n";
            echo "Combustível: {$this->combustivel->value}\n";
            echo "Velocidade Máxima: {$this->velocidadeMaxima} km/h\n";
        }

        // metodo que ativa o turbo ok
        public function ativarTurbo() {
            $this->boost();
        }
    }
?>