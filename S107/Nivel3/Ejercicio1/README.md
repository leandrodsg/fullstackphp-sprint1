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

Casos especiales añadidos
Agregué casos adicionales que sirven para validar comportamientos menos comunes del sistema:

1. Agregar dos libros con el mismo título  
   Se agregaron dos libros llamados "Duplicado", pero con autores e ISBN distintos  
   El sistema permitió ambos, ya que solo el ISBN debe ser único

2. Intentar eliminar un libro que no existe  
   Se intentó eliminar un libro con un ISBN que nunca fue registrado  
   El sistema no falló y devolvió `false`, como se esperaba

3. Buscar libros de un género que no existe  
   Se buscó un género inventado (por ejemplo, `Romance`, que no estaba en la lista original)  
   El sistema devolvió un arreglo vacío, sin errores

4. Libro con páginas negativas  
   Se agregó un libro con `-20` páginas.  
   El sistema lo aceptó y fue posible acceder al dato. No hubo errores.

5. Libro con campos vacíos  
   Se creó un libro con título, autor y género vacíos (`""`).  
   El sistema permitió agregarlo sin validación.

6. Libro con un género fuera de la lista definida  
   Se agregó un libro con el género `"Romance"`, que no aparece en la lista original del enunciado.  
   El sistema aceptó el género y pudo buscarlo luego sin errores.

7. Búsqueda por autor que no existe  
   Se intentó buscar un autor no registrado.  
   El resultado fue un arreglo vacío, sin errores.