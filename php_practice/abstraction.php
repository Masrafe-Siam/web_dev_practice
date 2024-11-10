<?php

abstract class Vehicle {
    abstract public function startEngine();

    public function stopEngine() {
        return "Engine stopped.";
    }
}

class Motorcycle extends Vehicle {
    public function startEngine() {
        return "Motorcycle engine started.";
    }
}

$bike = new Motorcycle();
echo $bike->startEngine(); 
