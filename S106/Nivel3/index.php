<?php
    require 'vendor/autoload.php';

    use Carbon\Carbon;

    $ahora = Carbon::now();

    echo "Fecha y hora actual: " . $ahora->toDateTimeString() . "\n";

    $masCincoDias = $ahora->addDays(5);

    echo "Fecha dentro de 5 días: " . $masCincoDias->toDateString() . "\n";
?>