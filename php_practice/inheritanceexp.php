<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Base class
class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function startEngine() {
        return "Starting the engine of the $this->brand.";
    }
}
// Derived class
class Car extends Vehicle {
    private $color;

    public function __construct($brand, $color) {
        parent::__construct($brand); // Call the parent constructor
        $this->color = $color;
    }
    public function displayDetails() {
        return "This is a $this->color $this->brand car.";
    }
}
// Creating an object of the Car class
$myCar = new Car("Toyota", "Red");
echo $myCar->startEngine() . "<br>";      // Output: Starting the engine of the Toyota.
echo $myCar->displayDetails();             // Output: This is a Red Toyota car.
?>
</body>
</html>