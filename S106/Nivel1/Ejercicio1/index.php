<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S106 PHP Avanzado</title>
</head>
<body>
    <section>
        
        <form action="procesar.php" method="POST">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" placeholder="Tu apellido" required>

            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad" placeholder="Tu edad" required>

            <input type="submit" value="Enviar">

        </form>
    </section>
</body>
</html>