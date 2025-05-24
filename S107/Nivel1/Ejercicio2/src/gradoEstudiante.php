<?php

    // recebe nota 
    function gradoEstudiante($nota) {

        // nota 60 ou mais "Primera División" ok
        if ($nota >= 60) {
            return "Primera División";
        }

        // nota entre 45 e 59 "Segunda División" ok
        elseif ($nota >= 45) {
            return "Segunda División";
        }

        // nota for entre 33 e 44 "Tercera División"
        elseif ($nota >= 33) {
            return "Tercera División";
        }

        // nota for menor que 33 "Reprobará" ok
        else {
            return "Reprobará";
        }
    }
?>