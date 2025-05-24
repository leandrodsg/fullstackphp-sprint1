Ejercicio 1 – Nivel 1 – Sprint 107

El objetivo era practicar pruebas unitarias utilizando PHPUnit, para verificar que una clase funciona correctamente en diferentes casos

Me dieron una clase llamada `NumberChecker`, que tiene dos funciones:
`isEven()` que dice si un número es par.
`isPositive()` que dice si un número es positivo.

Para comprobar, creé un archivo de pruebas llamado `NumberCheckerTest.php` usando PHPUnit. Escribí 5 pruebas en total:

Número par: `2` debe ser par.
Número impar: `3` no debe ser par.
Número positivo: `5` debe ser positivo.
Número negativo: `-1` no debe ser positivo.
Cero: `0` no debe ser positivo (caso borde)