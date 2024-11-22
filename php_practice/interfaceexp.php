<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
interface Movable {
    public function move();
}

class Car implements Movable {
    public function move() {
        return "The car is moving.";
    }
}

class Bicycle implements Movable {
    public function move() {
        return "The bicycle is moving.";
    }
}

// Creating objects of each class
$car = new Car();
$bicycle = new Bicycle();

echo $car->move() . "<br>";                // Output: The car is moving.
echo $bicycle->move();                     // Output: The bicycle is moving.
?>
</body>
</html>