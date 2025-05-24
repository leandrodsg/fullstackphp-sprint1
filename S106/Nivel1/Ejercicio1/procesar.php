<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <?php
            // sessao para usar $_SESSION
            session_start();
            
            // buscar os dados do form via post
            // testar se nao estao vazios antes de receber os valores ok
            if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad'])) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];

                if ($edad > 0 && $edad < 130) {
                    // se a idade for ok inserir os dados na sessao
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['edad']     = $edad;

                    // resultado com os datos
                    echo "Nombre: $nombre<br>";
                    echo "Apellido: $apellido<br>";
                    echo "Edad: $edad<br>";
                } else {
                    echo "Error: Edad inválida.";
                }
            } else {
                echo "Error: Algunos datos están vacíos o no fueron recibidos.";
            }

        ?>
    </main>
</body>
</html>