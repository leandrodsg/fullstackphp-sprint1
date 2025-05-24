<?php

    function mostrarInformacion()
    {
    
        echo "Función actual: " . __FUNCTION__ . "\n"; 
        echo "Este código está en el archivo: " . __FILE__ . "\n";
        echo "Está en la línea: " . __LINE__ . "\n";
        echo "Directorio actual: " . __DIR__ . "\n"; 
    }

    mostrarInformacion();
?>
