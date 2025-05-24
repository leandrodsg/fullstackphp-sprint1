Ejercicio 2 - Nivel 2 - Sprint 107

El objetivo era refactorizar las pruebas unitarias del ejercicio anterior usando la técnica de `DataProvider` con PHPUnit

Las pruebas fueron reorganizadas con un método `@dataProvider` llamado `notasProveedor`, que permite ejecutar múltiples casos

Cada caso contiene una nota y el resultado esperado según las divisiones:
Primera División: nota mayor o igual a 60
Segunda División: nota entre 45 y 59
Tercera División: nota entre 33 y 44
Reprobará: nota menor que 33