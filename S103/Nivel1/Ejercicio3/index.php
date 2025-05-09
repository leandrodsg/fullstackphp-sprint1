<?php
function contieneLetra($palabras, $letra) {
    $letra = strtolower($letra);
    $todasContienen = true;

    for ($i = 0; $i < count($palabras); $i++) {
        $palabra = strtolower($palabras[$i]);
        $posicion = strpos($palabra, $letra);

        if ($posicion === false) {
            $todasContienen = false;
        }
    }

    return $todasContienen;
}

$lista = ["Hola", "Php", "Html"];
$caracter = "h";

if (contieneLetra($lista, $caracter)) {
    echo "Todas tienen la letra $caracter\n";
} else {
    echo "Alguna no tiene la letra $caracter\n";
}
?>