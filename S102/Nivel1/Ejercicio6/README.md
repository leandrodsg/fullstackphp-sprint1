# Ejercicio 6 - Nivel 1

## Enunciado

Charlie envía un mensaje al azar. Solo el 50% de las veces lo muestra correctamente.

Crea una función llamada `bitten()` que devuelva `TRUE` el 50% de las veces y `FALSE` el resto.  
Utiliza `rand()` o `mt_rand()`.

## Objetivo

Practicar funciones aleatorias y condicionales simples en PHP.

## Código de ejemplo

```php
function bitten() {
    return rand(0, 1) === 1;
}

if (bitten()) {
    echo "Charlie envió el mensaje";
} else {
    echo "Charlie guardó silencio";
}
