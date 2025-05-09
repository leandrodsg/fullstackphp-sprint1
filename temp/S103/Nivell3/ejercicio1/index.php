<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
    <?php
        function cubo($n) {
            return ($n**3);
        }
        $numeros = [3, -2, 0, 5, 7, -1];
        $resultado = array_map("cubo", $numeros);
        foreach ($resultado as $r) {
            echo $r . " ";
        }
    ?>
</body>
</html>