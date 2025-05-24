<?php

    // interface para o impulso (contrato do boost)
    // qualquer classe que tenha essa interface
    // deve fornecer o metodo boost() para o turbo
    interface Impulsable {
        // ativa o modo turbo
        public function boost();
    }
?>