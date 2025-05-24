Ejercicio 1 – Nivel 2 – Sprint 107

El objetivo era actualizar las pruebas unitarias creadas anteriormente para la clase `NumberChecker`, aplicando la técnica de `@dataProvider` con PHPUnit

En el ejercicio anterior, se crearon pruebas simples para verificar dos funciones:
`isEven()` dice si un número es par
`isPositive()` dice si un número es positivo

Refactorizamos esas pruebas usando `@dataProvider` en dos métodos:
`numerosParaTestarSeEhPar`
`numerosParaTestarSeEhPositivo`

Testes
Número par `2`, `-4`, `0` deben ser pares
Número impar `3`, `-5` no deben ser pares
Número positivo `5` debe ser positivo
Número negativo `-1` no debe ser positivo
Cero: `0` no debe ser positivo
