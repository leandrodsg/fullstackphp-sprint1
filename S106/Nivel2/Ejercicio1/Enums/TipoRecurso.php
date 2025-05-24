<?php
    // tipo de material didático arquivo, artigo e etc
    enum TipoRecurso: string
    {
        // pode ser um arquivo PDF
        case Fitxer = 'Fitxer';
        // pode ser artigo de blog              
        case Article = 'Article web';
        // vdeo de YouTube mesmo ou outra de video
        case Video = 'Vídeo';
    }
?>