Ejercicio 1 y 2 – Nivel 3 – Sprint 106

El objetivo era instalar Composer, crear un nuevo proyecto desde cero, buscar una librería externa que me interesara, instalarla correctamente y luego escribir un programa en PHP que hiciera uso de esa librería

Primero instalé Composer en mi ordenador y creé un nuevo proyecto PHP usando `composer init` y generó el archivo `composer.json`

Después busqué una librería y elegí `nesbot/carbon`, que sirve para trabajar con fechas y horas, o sea muy practica y muy utilzada
La instalé con `composer require nesbot/carbon`

Composer creó también el archivo `composer.lock` y la carpeta `vendor`, donde guarda los archivos de la librería

Para usar la librería, hice un archivo `index.php` que muestra la fecha y hora actual, y también muestra la fecha sumando 5 días