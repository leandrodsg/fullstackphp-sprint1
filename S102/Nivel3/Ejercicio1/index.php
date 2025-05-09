<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Criba de Eratóstenes</title>
</head>
<body>
<?php
function mostrarPrimos($hasta) {
    $numeros = [];

    for ($i = 2; $i <= $hasta; $i++) {
        $numeros[$i] = true;
    }

    for ($i = 2; $i <= $hasta; $i++) {
        if ($numeros[$i]) {
            for ($multiplo = $i * 2; $multiplo <= $hasta; $multiplo += $i) {
                $numeros[$multiplo] = false;
            }
        }
    }

    for ($i = 2; $i <= $hasta; $i++) {
        if ($numeros[$i]) {
            echo $i . " ";
        }
    }
}

mostrarPrimos(50);
?>
</body>
</html>
