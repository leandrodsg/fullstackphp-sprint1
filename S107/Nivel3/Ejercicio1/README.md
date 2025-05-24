Ejercicio 1 – Nivel 3 – Sprint S107

EL Objetivo es crear un sistema básico para gestionar libros en una biblioteca y el sistema debe:
Representar libros con título, autor, ISBN, género y número de páginas.Agregar, eliminar y modificar libros.
Buscar libros por título, autor, género o ISBN
Listar libros con más de 500 páginas
Comprobar que todo funciona con pruebas automáticas usando PHPUnit

Dividí el proyecto en dos clases principales:

`Libro.php`
Representa un solo libro
Tiene 5 propiedades: título, autor, ISBN, género y páginas
Usa métodos "getter" para acceder a cada dato

`Libreria.php`
Maneja una colección de libros
Usa un arreglo simple con el ISBN como clave para evitar duplicados

Los métodos implementados son:
`adicionarLibro()` – Agrega un libro
`removerLibro()` – Elimina un libro por ISBN
`modificarLibro()` – Cambia los datos de un libro
`buscarPorTitulo()` – Devuelve libros por título exacto
`buscarPorAutor()` – Devuelve libros por autor
`buscarPorGenero()` – Devuelve libros por género
`buscarPorIsbn()` – Devuelve el libro con ese ISBN
`librosGrandes()` – Devuelve libros con más de 500 páginas

`LibroTest.php`
Verifica si un libro se crea correctamente.
Usé `@dataProvider` para probar varios libros fácilmente

`LibreriaTest.php`
Probé las funciones principales del sistema:
1. Agregar libro
2. Eliminar libro
3. Modificar libro
4. Buscar por título, autor, género e ISBN
5. Filtrar libros con más de 500 páginas