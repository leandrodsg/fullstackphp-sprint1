<?php

require_once __DIR__ . '/classes/Car.php';

$meuCarro = new Car(
    'Fiat',
    'ABC-1234',
    TipoCombustible::GASOLINA,
    180
);

echo "Especificaciones del vehículo\n";
$meuCarro->mostrarEspecificacoes();

echo "\nActivar el modo turbo:\n";
$meuCarro->ativarTurbo();
