<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
    <?php
        $principal = "Hello, World!";
        $mayusculas = strtoupper($principal);
        $longitud = strlen($principal);
        $inverso = strrev($principal);
        $segunda = "Aquest és el curs de PHP";

        echo "Imprimir texto: $principal";
        echo "<br>";
        echo "Mayúsculas: $mayusculas";
        echo "<br>";
        echo "Longitud: $longitud";
        echo "<br>";
        echo "Inverso: $inverso";
        echo "<br>";
        echo "Concatenación: " .$segunda. " y " .$inverso;
        
    ?>
</body>
</html>