<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
    <?php
        $alunos = [
            "Lucía Vargas"     => [9.5, 9.0, 10, 8.5, 9.8],
            "Carlos Méndez"    => [6, 7, 6.5, 6.2, 7.1],
            "Fátima Lozano"    => [4.0, 5.5, 6.0, 5.0, 4.8],
            "Zahid Ramírez"    => [10, 9.9, 10, 9.5, 10],
            "Leandro Duarte"   => [2.0, 3.5, 4.0, 1.5, 2.8]
        ];
        
        function calcularMedias($alunos) {
            $totalSuma = 0;
            $notasCantid = 0;
        
            foreach ($alunos as $nombre => $notas) {
                $suma = array_sum($notas);
                $media = $suma / count($notas);
        
                echo "$nombre: $media<br>";
        
                $totalSuma += $suma;
                $notasCantid += count($notas);
            }
        
            $mediaClase = $totalSuma / $notasCantid;
            echo "<br>Media general de la clase: $mediaClase";
        }
        
        calcularMedias($alunos);
    ?>
</body>
</html>