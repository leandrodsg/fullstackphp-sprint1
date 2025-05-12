Ejercicio 2 - Nivel 1

El ejercicio pedía crear una clase base llamada Shape que recibe ancho y alto por parámetros  
Después teníamos que crear dos clases hijas: Triangle y Rectangle  
Cada una tiene que calcular el área de su forma usando esos valores

Creé la clase Shape com ancho y alto como atributos protegidos  
Método area vacío solo para que las clases hijas lo puedan sobrescribir

Triangle y Rectangle heredan de Shape y cada una tiene su propia versión del método area:  
el triángulo usa ancho * alto / 2  
el rectángulo usa ancho * alto directo

Desde el archivo index.php probé las dos figuras para ver si el cálculo de área se mostraba correctamente  
La salida fue como se esperaba, con los valores calculados y mostrados en pantalla

Encapsulamiento con el uso de protected en los atributos de Shape  
Herencia porque Triangle y Rectangle extienden Shape y aprovechan su constructor  
Polimorfismo porque las dos clases tienen el mismo método area pero hacen cosas distintas dependiendo de cuál se usa