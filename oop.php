<?php
class Animal {
    public $name;
    public $age = 0;
}

$cat = new Animal;
$dog = new Animal;

$cat->name = 'Мурзик';
$dog->name = 'Тузик';
echo $cat->name;