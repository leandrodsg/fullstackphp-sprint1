<?php
$alumnos = [
    "Lucía Vargas"   => [9.5, 9.0, 10, 8.5, 9.8],
    "Carlos Méndez"  => [6, 7, 6.5, 6.2, 7.1],
    "Fátima Lozano"  => [4.0, 5.5, 6.0, 5.0, 4.8],
    "Zahid Ramírez"  => [10, 9.9, 10, 9.5, 10],
    "Leandro Duarte" => [2.0, 3.5, 4.0, 1.5, 2.8]
];

function mostrarMedias($alumnos) {
    $sumaTotal = 0;
    $cantidadNotas = 0;

    foreach ($alumnos as $nombre => $notas) {
        $suma = array_sum($notas);
        $media = $suma / count($notas);
        echo "$nombre = $media\n";

        $sumaTotal += $suma;
        $cantidadNotas += count($notas);
    }

    $mediaClase = $sumaTotal / $cantidadNotas;
    echo "\nMadia de la Clase = $mediaClase\n";
}

mostrarMedias($alumnos);
?>