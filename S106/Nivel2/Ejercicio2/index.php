<?php

require_once __DIR__ . '/classes/Car.php';

// criar o carro ok 
$meuCarro = new Car(
    'Fiat',
    'ABC-1234',
    TipoCombustible::GASOLINA,
    180
);

// resumo do carro ok
echo "Especificações do Veículo\n";
$meuCarro->mostrarEspecificacoes();

// modo turbo ok
echo "\nAtivando modo turbo:\n";
$meuCarro->ativarTurbo();
