<?php

    function gradoEstudiante($nota) {
        // nota maior ou igual a 60?
        if ($nota >= 60) {
            return "Primera División";
        }
        // nota maior ou igual a 45?
        // 45 e 59: "Segunda División" ok
        elseif ($nota >= 45) {
            return "Segunda División";
        }
        // 33 e 44: "Tercera División" ok
        elseif ($nota >= 33) {
            return "Tercera División";
        }
        // abaixo de 33: "Reprobará" ok
        else {
            return "Reprobará";
        }
    }
?>