<?php

    require_once 'Enums/Tema.php';
    require_once 'Enums/TipoRecurso.php';

    class RecursoDidactico
    {
        // atributos tipados com enums ok
        public string $nome;
        public Tema $tema;
        public string $url;
        public TipoRecurso $tipo;

        // construtor recebe nome Tema e TipoRecurso tipados
        public function __construct(string $nome, Tema $tema, string $url, TipoRecurso $tipo)
        {
            // atributos garantindo tipagem ok
            $this->nome  = $nome;
            $this->tema  = $tema;
            $this->url   = $url;
            $this->tipo  = $tipo;
        }

        // saida das infos ok
        public function mostrar()
        {
            // nome do recurso ok
            echo "Nome do recurso: {$this->nome}\n";
            // tema acessando o enum ok
            echo "Tema: {$this->tema->value}\n";
            // URL
            echo "URL: {$this->url}\n";
            // tipo de recurso com enum ok
            echo "Tipo: {$this->tipo->value}\n";
        }
    }
?>