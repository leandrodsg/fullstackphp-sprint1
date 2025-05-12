<?php
    require_once 'classes/PokerDice.php';

    $dados = [];

    for ($i = 0; $i < 5; $i++) {
        $dados[] = new PokerDice();
    }

    foreach ($dados as $indice => $dado) {
        $dado->throw();
        $figura = $dado->shapeName(); 
        echo "Dado " . ($indice + 1) . ": $figura\n";
    }

    $total = PokerDice::getTotalThrows();

    echo "\nTotal de jogadas: $total\n";
?>