<?php
$numeros = [2, 4, 5, 6, 7, 9, 10, 11, 13, 15];
$sumaPrimos = 0;

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

for ($i = 0; $i < count($numeros); $i++) {
    if (esPrimo($numeros[$i])) {
        $sumaPrimos += $numeros[$i];
    }
}

echo "sumaPrimos = $sumaPrimos\n";
?>