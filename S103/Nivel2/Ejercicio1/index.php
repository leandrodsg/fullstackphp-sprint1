<?php
$array1 = [3, 7.5, 10, 20, 30, 45.2];
$array2 = [10, 15, 20, 25.5, 45.2, 60];

function mostrarArray($nombre, $array) {
    // reindexar
    $array = array_values($array); 
    echo "\$$nombre = [";
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i];
        if ($i < count($array) - 1) {
            echo ", ";
        }
    }
    echo "];\n";
}

mostrarArray("array1", $array1);
mostrarArray("array2", $array2);

$interseccion = array_intersect($array1, $array2);
echo "\n// Valores en común\n";
mostrarArray("interseccion", $interseccion);

$mezcla = array_merge($array1, $array2);
echo "\n// Mezcla con duplicados\n";
mostrarArray("mezcla", $mezcla);

$mezclaUnica = array_unique($mezcla);
echo "\n// Mezcla sin duplicados\n";
mostrarArray("mezclaUnica", $mezclaUnica);
?>
