Ejercicio 1 - Nivel 1

Teníamos que crear una clase llamada `Employee` que tenga los atributos nombre y sueldo

Luego había que hacer:
Un método para recibir esos datos al momento de crear el empleado.
Otro método para mostrar el nombre del empleado y un mensaje que diga si tiene que pagar impuestos o no.
El mensaje depende del sueldo: si gana más de 6000, paga impuestos

Creé la clase `Employee` y le puse dos propiedades privadas: `$nombre` y `$salario`
Constructor `__construct()` para que reciba el nombre y el salario desde el principio
Una función `print()` que muestra el nombre del empleado y verifica si su salario pasa los 6000
Si sí, muestra que debe pagar impuestos
Si no, muestra que no debe pagar

Encapsulamiento en `$nombre` y `$salario` son privadas
Método constructor para iniciar el objeto con valores, y `print()` para mostrar los datos