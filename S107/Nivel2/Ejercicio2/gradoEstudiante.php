<?php

    function gradoEstudiante($nota) {
        if ($nota >= 60) {
            return "Primera División";
        }
        elseif ($nota >= 45) {
            return "Segunda División";
        }
        elseif ($nota >= 33) {
            return "Tercera División";
        }
        else {
            return "Reprobará";
        }
    }
?>