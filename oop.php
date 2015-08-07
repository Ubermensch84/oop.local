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

    function __construct ($num) {
        echo "Object $num created<br>";
    }

    function __destruct () {
        echo "Object deleted<br />";
    }

    function __clone () {
        echo "Object clone<br />";
    }
}

$cat = new Animal(1);
$dog = new Animal(2);
$cat->name = 'Мурзик';
$bigCat = clone $cat;
$dog->name = 'Тузик';
$cat->sayHello('Мяу');
$dog->sayHello('Гав');

//$cat->sayHello();

