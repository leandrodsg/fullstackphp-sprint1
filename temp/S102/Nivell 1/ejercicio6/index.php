<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 6</title>
</head>
<body>
    <?php
        function isBitten() {
            return rand(0, 1) === 1;
        }
        /*
        function isBitten() {
            $numero = rand(0, 1);
            if ($numero === 1) {
                return true;
            } else {
                return false;
            }
        }*/
        echo isBitten() ? "Charlie te mordió!" : "Uf! No muerdas";
    ?>
</body>
</html>