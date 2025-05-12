<?php
    require_once 'classes/Pelicula.php';
    require_once 'classes/Cinema.php';

    $p1 = new Pelicula("Inception", 148, "Christopher Nolan");
    $p2 = new Pelicula("Interstellar", 169, "Christopher Nolan");
    $p3 = new Pelicula("Tenet", 150, "Christopher Nolan");
    $p4 = new Pelicula("Dunkirk", 106, "Christopher Nolan");
    $p5 = new Pelicula("Titanic", 195, "James Cameron");
    $p6 = new Pelicula("Avatar", 162, "James Cameron");

    $cine1 = new Cinema("Cinesa Glòries", "Barcelona");
    $cine2 = new Cinema("Verdi Park", "Barcelona");

    $cine1->agregarPelicula($p1);
    $cine1->agregarPelicula($p5);
    $cine1->agregarPelicula($p2);

    $cine2->agregarPelicula($p3);
    $cine2->agregarPelicula($p4);
    $cine2->agregarPelicula($p6);

    $cine1->mostrarPeliculas();
    $cine2->mostrarPeliculas();

    $masLarga1 = $cine1->getPeliculaMasLarga();
    echo "Película más larga en {$cine1->getNombre()}:\n";
    if ($masLarga1) {
        $masLarga1->mostrar();
    } else {
        echo "No hay películas registradas.\n";
    }

    $masLarga2 = $cine2->getPeliculaMasLarga();
    echo "Película más larga en {$cine2->getNombre()}:\n";
    if ($masLarga2) {
        $masLarga2->mostrar();
    } else {
        echo "No hay películas registradas.\n";
    }

    function buscarPeliculasPorDirector($director, $cines) {
        $encontradas = [];

        foreach ($cines as $cine) {
            foreach ($cine->getPeliculas() as $pelicula) {
                
                if ($pelicula->getDirector() === $director) {
                    $yaExiste = false;

                    foreach ($encontradas as $p) {
                        if ($p->getNombre() === $pelicula->getNombre()) {
                            $yaExiste = true;
                            break;
                        }
                    }

                    if (!$yaExiste) {
                        $encontradas[] = $pelicula;
                    }
                }
            }
        }

        return $encontradas;
    }

    echo "\nPelículas dirigidas por Christopher Nolan:\n";
    $resultados = buscarPeliculasPorDirector("Christopher Nolan", [$cine1, $cine2]);
    foreach ($resultados as $pelicula) {
        $pelicula->mostrar();
    }
?>
