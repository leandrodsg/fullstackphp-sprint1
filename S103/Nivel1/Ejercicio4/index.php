<?php
$persona = [
    "nombre" => "Juan",
    "edad" => 28,
    "correo" => "juan@cibernariun.com",
    "comida_favorita" => "Pizza"
];

foreach ($persona as $p => $valor) {
    echo $p . ": " . $valor . "\n";
}
?>