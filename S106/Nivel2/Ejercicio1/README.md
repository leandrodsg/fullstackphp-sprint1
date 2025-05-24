Ejercicio 1 – Nivel 2 – S106

En este ejercicio desarrollé una clase que representa un recurso didáctico relacionado con la especialidad de desarrollo web

La clase contiene los siguientes atributos:

nombre (string)
tema enum Tema: PHP, CSS, HTML, SQL, Laravel
url (string)
tipo enum TipoRecurso: Fitxer, Article web, Vídeo

Utilicé enums en la carpeta `Enums/` para el tema y el tipo de recurso
`Enums/Tema.php` y `Enums/TipoRecurso.php`
`Recurso.php` define la clase `RecursoDidactico` con constructor tipado y método `mostrar()`
`index.php` instancia un `RecursoDidactico` con enums y llama a `mostrar()`

Constructor tipado recibe `string $nome`, `Tema $tema`, `string $url` y `TipoRecurso $tipo`