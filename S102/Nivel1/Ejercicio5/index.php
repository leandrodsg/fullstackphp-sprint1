<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 5</title>
</head>
<body>
    <?php
        function grado($nota) {
            if ($nota < 0 || $nota > 100){
                echo "Calificación de evaluación no válida";
            } else {
                if ($nota < 33) {
                    echo "Reprobado";
                } elseif ($nota < 45) {
                    echo "Tercera División";
                } elseif ($nota < 60) {
                    echo "Segunda División";
                } else {
                    echo "Primera División";    
                }
            }
        }

        echo "Verificar el grado de un/a estudiante según su nota";
        echo "<br>";
        echo "<br>";
        echo "Si la nota es menor al 33%: ";
        grado(30);
        echo "<br>";
        echo "Si la nota está entre 33% y 44%: ";
        grado(40);
        echo "<br>";
        echo "Si la nota está entre 45% y 59%: ";
        grado(50);
        echo "<br>";
        echo "Si la nota es 60% o más: ";
        grado(60);
    ?>
</body>
</html>