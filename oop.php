<?php
class Animal {
    public $name;
    public $age = 0;
    function sayHello ($word) {
        echo $this->name . ' сказал ' . $word;
        $this->drawBr();
    }
    function drawBr () {
        echo '<br />';
    }
}

$cat = new Animal;
$dog = new Animal;

$cat->name = 'Мурзик';
$dog->name = 'Тузик';
$cat->sayHello('Мяу');
$dog->sayHello('Гав');

//$cat->sayHello();

