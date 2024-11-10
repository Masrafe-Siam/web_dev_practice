<?php

class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "This car is a $this->color $this->model.";
    }
}

$myCar = new Car("red", "Toyota");
echo $myCar->message(); // Output: This car is a red Toyota.
