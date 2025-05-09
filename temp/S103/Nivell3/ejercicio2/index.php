<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
<?php
    $palabras = ["flexbox", "grid", "margin", "padding", "html", "CSS", "JavaScript", "API", "fetch", "DOM"];

    /*
    $filtradas = [];
    foreach ($palabras as $palabra) {
        if (strlen($palabra) % 2 === 0) {
            $filtradas[] = $palabra;
        }
    }
    foreach ($filtradas as $p) {
        echo $p . " ";
    }
    */

    function tamanoPar($str) {
        return strlen($str) % 2 === 0;
    }
    $resultado = array_filter($palabras, "tamanoPar");
    foreach ($resultado as $r) {
        echo $r . " ";
    }
?>
</body>
</html>
