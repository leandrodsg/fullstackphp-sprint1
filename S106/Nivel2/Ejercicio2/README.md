Ejercicio 2 – Nivel 2 – Sprint 106

El objetivo es simular el comportamiento de un coche (Car) que puede activar un modo turbo
Cree una clase llamada `Car` que represente un coche, con los datos marca, matrícula, tipo de combustible y velocidad máxima
Se ha implementado un modo turbo que se puede activar el boost

Para eso, usé Enum `TipoCombustible` que define los tipos de combustible posibles (gasolina, diésel, eléctrico)
Usé la Interface `Impulsable` que obliga a que la clase tenga el `boost()`
Cree Trait `Turbo` que contiene `boost()` con un mensaje cuando se activa el turbo
La Clase `Car` une todo eso y tiene los datos del coche, además de un método `activarTurbo()` que llama al turbo