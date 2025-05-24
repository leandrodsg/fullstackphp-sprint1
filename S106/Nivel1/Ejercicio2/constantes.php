<?php
    
    // usando a funcao com seu proprio contexto
    function mostrarInformacion()
    {
        // nome da funcao
        echo "Función actual: " . __FUNCTION__ . "\n";
        // caminho do file 
        echo "Este código está en el archivo: " . __FILE__ . "\n";
        // numero da linha atual 
        echo "Está en la línea: " . __LINE__ . "\n";
        // diretorio do file
        echo "Directorio actual: " . __DIR__ . "\n"; 
    }

    // resultado com os echos ok
    mostrarInformacion();
?>
