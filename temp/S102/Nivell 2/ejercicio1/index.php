<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercici 1</title>
</head>
<body>
<?php
    function calcularCosto($minutos) {
        if ($minutos <= 3) {
            echo "Costo de la llamada: 10 céntimos<br>";
        } else {
            $minutosExtra = $minutos - 3;
            $totalCosto = 10 + ($minutosExtra * 5);
            echo "Costo de la llamada: $totalCosto céntimos<br>";
        }
    }

    echo "Tiempo de llamada: 2 minutos<br>";
    calcularCosto(2);
    echo "<br>";
    echo "Tiempo de llamada: 5 minutos<br>";
    calcularCosto(5);
?>
</body>
</html>
