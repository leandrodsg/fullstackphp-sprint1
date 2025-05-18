Nivel 1 - Exercici 1

La idea era crear un tipo de dato que represente un animal
Cada animal tiene que tener su propio sonido, por eso cree una clase general llamada Animal y dos clases que heredan de ella que son Dog y Cat
Cada una tiene su propio makeSound

makeSound se encarga de mostrar un mensaje en la pantalla
Si es un perro muestra Auu, Auu!
Si es un gato muestra Miau

La clase Animal es abstracta porque no tiene sentido crear un animal sin saber que tipo es
Utilize el constructor para guardar el nombre del animal aunque todavia no lo usamos para nada en el mensaje

En el archivo index.php creamos un perro y un gato
Despues Yo use echo para mostrar el sonido de cada uno