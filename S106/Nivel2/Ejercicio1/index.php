<?php

require_once 'Recurso.php';

// objeto de exmplo ok
$recurso = new RecursoDidactico(
    // aqui o nome
    "Documentación oficial de PHP", 
    // o tema tem que bater com o enum Tema ok   
    Tema::PHP,
    // url                             
    "https://www.php.net/manual/es/",
    // tipo tbm tem que bater com o enum TipoRecurso ok  
    TipoRecurso::Article                      
);

// metodo que exibe os dados
$recurso->mostrar();
