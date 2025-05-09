<?php
$numeros = [3, -2, 0, 5, 7, -1];
$resultado = [];

for ($i = 0; $i < count($numeros); $i++) {
    $resultado[] = $numeros[$i] ** 3;
}

echo "\$resultado = [";
for ($i = 0; $i < count($resultado); $i++) {
    echo $resultado[$i];
    if ($i < count($resultado) - 1) {
        echo ", ";
    }
}
echo "];\n";
?>