Ejercicio 1 – Nivel 3 – S105 (reformulado con interfaz)

El objetivo era calcular el área de cada figura, pero con un enfoque diferente respecto
al Nivel 2 
No ire reutilizar la clase abstracta `Shape`, como había hecho anteriormente, opté por crear una interfaz `ShapeInterface` que define la estructura obligatoria para todas las figuras

La interfaz obliga a que cada clase implemente `area()` se implemente cada clase de forma totalmente independiente, con su constructor y sus atributos

Cada clase implementa el método `area()` de su propria forma:
El triángulo calcula base * altura dividido entre 2
El rectángulo multiplica ancho por alto
El círculo usa pi * radio²

El archivo `index.php` instancia cada figura y recorre un array de objetos con polimorfismo mostrando las áreas calculadas