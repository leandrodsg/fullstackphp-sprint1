<?php

    require_once 'Enums/Tema.php';
    require_once 'Enums/TipoRecurso.php';

    class RecursoDidactico
    {
        public string $nome;
        public Tema $tema;
        public string $url;
        public TipoRecurso $tipo;

        public function __construct(string $nome, Tema $tema, string $url, TipoRecurso $tipo)
        {
            $this->nome  = $nome;
            $this->tema  = $tema;
            $this->url   = $url;
            $this->tipo  = $tipo;
        }

        public function mostrar()
        {
            echo "Nombre del recurso: {$this->nome}\n";
            echo "Tema: {$this->tema->value}\n";
            echo "URL: {$this->url}\n";
            echo "Tipo: {$this->tipo->value}\n";
        }
    }
?>