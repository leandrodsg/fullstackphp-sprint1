# Ejercicio 3 - Nivel 1

Recibe un array de palabras y un carácter como parámetros en una función.  
La función devuelve `true` si todas las palabras contienen el carácter, y `false` si al menos una no lo tiene.

Se usa `strtolower()` para comparar sin diferenciar mayúsculas.  
`strpos()` busca el carácter dentro de cada palabra.

La función `strpos()` devuelve un número (la posición donde se encuentra el carácter).  
Pero si no lo encuentra, devuelve `false`.

Por eso se usa `=== false` y no solo `if (!$posicion)`.  
Esto evita errores cuando la letra está en la primera posición (índice 0), que también se considera “falsy” en PHP.  
Con `=== false` aseguramos que solo marcamos como no encontrada cuando realmente no existe en la palabra.

- Comparación sin mayúsculas con `strtolower()`
- Uso de `strpos()` y comparación con `=== false`
- Variable booleana para guardar el resultado
- Estructura de función con retorno booleano
- Bucle `for` básico

