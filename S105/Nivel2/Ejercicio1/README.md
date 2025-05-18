Ejercicio 1 - Nivel 2

La idea era crear una clase Shape como modelo para otras formas
Shape recibe ancho y alto en el constructor

Como no tiene sentido calcular el área de una forma genérica
hice que Shape sea una clase abstracta
y también hice que el método area sea abstracto

Después creé dos subclases
una llamada Triangle que calcula el área como base por altura dividido por 2
y otra llamada Rectangle que multiplica ancho por alto

En index.php creé un triángulo y un rectángulo con los mismos valores

hice uso de clases abstractas para forzar estructura
herencia para compartir propiedades entre formas
polimorfismo para que cada forma tenga su cálculo propio