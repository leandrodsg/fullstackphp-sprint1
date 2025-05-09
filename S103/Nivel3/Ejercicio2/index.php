<?php
$palabras = ["flexbox", "grid", "margin", "padding", "html", "CSS", "JavaScript", "API", "fetch", "DOM"];
$resultado = [];

for ($i = 0; $i < count($palabras); $i++) {
    $palabra = $palabras[$i];
    if (strlen($palabra) % 2 === 0) {
        $resultado[] = $palabra;
    }
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