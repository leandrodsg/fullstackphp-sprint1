<?php
$valores = array(10, 20, 30, 40, 50, 60);

echo "Cantidad original: " . count($valores) . "\n";

// eliminar valor pos 2
unset($valores[2]); 

// reindexa todo o array
$valores = array_values($valores); 

for ($i = 0; $i < count($valores); $i++) {
    echo "Valor en posición $i: " . $valores[$i] . "\n";
}

// nova cantidad
echo "Cantidad final: " . count($valores) . "\n";
?>