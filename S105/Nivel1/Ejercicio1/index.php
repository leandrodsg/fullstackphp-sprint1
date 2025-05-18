<?php
    require_once __DIR__ . '/classes/Animal.php';
    require_once __DIR__ . '/classes/Dog.php';
    require_once __DIR__ . '/classes/Cat.php';

    $dog = new Dog("Rex");
    $cat = new Cat("Mimi");

    echo "Sonido de perro: ";
    $dog->makeSound();

    echo "Sonido de gato: ";
    $cat->makeSound();
?>
