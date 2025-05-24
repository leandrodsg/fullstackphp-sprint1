<?php
    
    require_once 'Persona.php';

    $persona = new Persona("Alves", 35);

    echo $persona . "\n";

    echo "Idade acessada com __get(): " . $persona->edad . "\n";

    echo "Teste com propriedade inexistente: " . $persona->apellido. "\n";
?>