<?php
require_once 'classes/PokerDice.php';

// array con 5
$dados = [];

// Inicializa los 5 dados
for ($i = 0; $i < 5; $i++) {
    $dados[] = new PokerDice();
}

// Jogam el dado e resultado como salida
foreach ($dados as $indice => $dado) {
    // aqi joga o dado
    $dado->throw();
    // la face sorteada
    $figura = $dado->shapeName(); 
    echo "Dado " . ($indice + 1) . ": $figura\n";
}

//acessar static 
$total = PokerDice::getTotalThrows();

echo "\nTotal de jogadas: $total\n";
?>