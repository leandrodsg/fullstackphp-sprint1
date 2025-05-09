<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
</head>
<body>
    <?php
        $edad = 30;
        $peso = 68;
        $apelido = "Augusto";
        $activo = true;
        const NOMBRE = "Josep";

        echo "<h2>Descripción de " .NOMBRE. "</h2>";
        echo "<br>";
        echo "Nombre completo: " .NOMBRE. " " .$apelido;
        echo "<br>";
        echo "Edad: $edad";
        echo "<br>";
        echo "Peso: $peso";
        echo "<br>";
        echo "Activo (Sí/No): " . ($activo ? "Sí" : "No");
    ?>
</body>
</html>