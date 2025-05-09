<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
</head>
<body>
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
    /*
    $sumaPrimos = 0;

    foreach ($numeros as $n) {
        if (esPrimo($n)) {
            $sumaPrimos += $n;
        }
    }
    */

    $sumaPrimos = array_reduce($numeros, function($acum, $n) {
        return esPrimo($n) ? $acum + $n : $acum;
    }, 0);

    echo "Suma de primos: $sumaPrimos";
?>
</body>
</html>
