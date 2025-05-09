<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
</head>
<body>
    <?php
        function contar($limite, $passo) {
            if (!$limite) {
                $limite = 10;
            }
        
            for ($i = 1; $i <= $limite; $i += $passo) {
                echo "$i ";
            }
        }

        echo "Con el valor límite:";
        echo "<br>";
        contar(20, 4);
        echo "<br>";
        echo "<br>";
        echo "Sin el valor límite:";
        echo "<br>";
        contar(null, 2);
    ?>
</body>
</html>