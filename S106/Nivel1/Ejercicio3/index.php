<?php
    // classe Persona
    require_once 'Persona.php';

    // objeto Persona com nome e idade
    $persona = new Persona("Alves", 35);

    // echo com o objeto
    // aqui ja foi executado o __toString dentro de Persona qd criado o novo objeto
    echo $persona . "\n";

    // acessar diretamente a idade mesmo sendo privada ok
    echo "Idade acessada com __get(): " . $persona->edad . "\n";

    // acessar uma propriedade que nao existe apellido
    // __get retorna uma mensagem avisando que essa propriedade na existe
    echo "Teste com propriedade inexistente: " . $persona->apellido. "\n";
?>