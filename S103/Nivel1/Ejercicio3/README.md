# Ejercicio 3 - Nivel 1

Recibe un array de palabras y un carácter como parámetros en una función.  
La función devuelve `true` si todas las palabras contienen el carácter, y `false` si al menos una no lo tiene.

`strtolower()` para comparar sin diferenciar mayúsculas  
`strpos()` busca el carácter dentro de cada palabra

La función `strpos()` devuelve un número  
Pero si no lo encuentra, devuelve `false`

Por eso se usa `=== false` y no solo `if (!$posicion)` y eso evita errores cuando la letra está en la primera posición (índice 0) 
Con `=== false` solo marcamos como no encontrada cuando realmente no existe en la palabra

Comparación sin mayúsculas con `strtolower()`
`strpos()` y comparación con `=== false`
