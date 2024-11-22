<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Car {
    // Properties
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function startEngine() {
        return "The engine of the $this->color $this->brand is starting!";
    }
}

// Creating an object of the Car class
$myCar = new Car("Toyota", "Red");
echo $myCar->startEngine(); // Output: The engine of the Red Toyota is starting!
?>
</body>
</html>
