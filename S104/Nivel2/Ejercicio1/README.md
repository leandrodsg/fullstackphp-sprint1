Ejercicio 1 - Nivel 2

La idea era hacer una clase llamada PokerDice que representa un dado especial con figuras de póker en vez de números  
Las caras del dado son As K Q J 7 y 8

El ejercicio pedía crear tres métodos  
uno que tira el dado y guarda la figura aleatoria que salió  
otro que devuelve cuál fue la figura que salió en esa última tirada  
y uno más que devuelve el total de tiradas realizadas en todo el programa entre todos los dados

Creé la clase PokerDice con una propiedad privada para guardar la última figura que salió  
También hice una lista estática con las caras posibles y otra variable estática para contar las tiradas

Método throw() se genera un número aleatorio entre 0 y 5  
busco la figura en el array y la guardo en la variable privada  
sumo uno al total de tiradas usando la variable estática

Método shapeName() devuelve cuál fue la última figura que salió en ese dado  
Método getTotalThrows() devuelve cuántas veces se tiraron dados en total

Creé un array con 5 dados  
usé un for para tirar cada uno y mostrar la figura que salió  
al final también mostré el total de tiradas entre todos los dados

**uso de static para que algunas cosas pertenezcan a la clase y no a cada objeto
**acceso a métodos estáticos usando los dos puntos dobles ::