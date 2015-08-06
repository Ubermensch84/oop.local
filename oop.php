<?php
class Animal {
    public $name;
    public $age = 0;
    function sayHello () {
        echo "Hello";
    }
}

$cat = new Animal;
$dog = new Animal;

$cat->name = 'Мурзик';
$dog->name = 'Тузик';

$cat->sayHello();

