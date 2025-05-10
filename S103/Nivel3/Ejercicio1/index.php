<?php
$numeros = [3, -2, 0, 5, 7, -1];

function cubo($n) {
    return $n * $n * $n;
}

$resultado = array_map("cubo", $numeros);

echo "\$resultado = [";
for ($i = 0; $i < count($resultado); $i++) {
    echo $resultado[$i];
    if ($i < count($resultado) - 1) {
        echo ", ";
    }
}
echo "];\n";
?>
