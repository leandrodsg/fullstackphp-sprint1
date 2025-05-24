<?php

require_once 'Recurso.php';

$recurso = new RecursoDidactico(
    "Documentación oficial de PHP",   
    Tema::PHP,                            
    "https://www.php.net/manual/es/", 
    TipoRecurso::Article                      
);

$recurso->mostrar();
