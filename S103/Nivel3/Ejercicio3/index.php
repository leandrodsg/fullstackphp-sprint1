<?php
$numeros = [2, 4, 5, 6, 7, 9, 10, 11, 13, 15];

function esPrimo($n) {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

$sumaPrimos = array_reduce($numeros, function($acum, $n) {
    return esPrimo($n) ? $acum + $n : $acum;
}, 0);

echo "Suma de primos = $sumaPrimos\n";
?>