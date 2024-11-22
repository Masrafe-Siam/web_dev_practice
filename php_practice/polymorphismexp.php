<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Vehicle {
    public function startEngine() {
        return "Starting the engine of a vehicle.";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        return "Starting the engine of a car.";
    }
}

class Motorcycle extends Vehicle {
    public function startEngine() {
        return "Starting the engine of a motorcycle.";
    }
}

// Creating objects of each class
$car = new Car();
$motorcycle = new Motorcycle();

echo $car->startEngine() . "<br>";         // Output: Starting the engine of a car.
echo $motorcycle->startEngine();           // Output: Starting the engine of a motorcycle.
?>
</body>
</html>