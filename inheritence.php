<?php

class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sound() {
        return "Some generic sound";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Bark";
    }
}

$dog = new Dog("Buddy");
echo $dog->sound(); 

