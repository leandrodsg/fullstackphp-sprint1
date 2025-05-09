<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
    <?php
        $primero = [3, 7.5, 10, 20, 30, 45.2];
        $segundo = [10, 15, 20, 25.5, 45.2, 60];

        echo "La intersección de las dos matrices:";
        echo "<br>";
        $interseccion = array_intersect($primero, $segundo);
        foreach ($interseccion as $i) {
            echo $i . " ";
        }

        echo "<hr><br>";

        echo "La mezcla de las dos matrices (con duplicados):";
        echo "<br>";
        $mescla = array_merge($primero, $segundo);
        foreach ($mescla as $m) {
            echo $m . " ";
        }

        echo "<hr><br>";

        echo "La mezcla de las dos matrices (sin duplicados):";
        echo "<br>";
        $mesclaSinDupli = array_unique(array_merge($primero, $segundo));
        foreach ($mesclaSinDupli as $s) {
            echo $s . " ";
        }
    ?>
</body>
</html>
