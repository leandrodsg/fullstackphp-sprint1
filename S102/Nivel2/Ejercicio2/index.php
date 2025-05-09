<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercici 2</title>
</head>
<body>
    <?php
    function totalXoco($quant) {
        return $quant * 1;
    }

    function totalXicle($quant) {
        return $quant * 0.5;
    }

    function totalCara($quant) {
        return $quant * 1.5;
    }

    $totalCompra = totalXoco(2) + totalXicle(1) + totalCara(1);

    echo "Total de la compra: $totalCompra euros";
    ?>
</body>
</html>
