<?php

// Interface declaration
interface Shape {
    public function calculateArea();   // abstract method
}


// -------------------------------------
// Circle class implementing Shape
// -------------------------------------
class Circle implements Shape {

    private $radius;   // class-specific property

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement calculateArea() for circle
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}


// -------------------------------------
// Square class implementing Shape
// -------------------------------------
class Square implements Shape {

    private $side;    // class-specific property

    public function __construct($side) {
        $this->side = $side;
    }

    // Implement calculateArea() for square
    public function calculateArea() {
        return $this->side * $this->side;
    }
}


// -------------------------------------
// Create Objects and Output
// -------------------------------------

$circle = new Circle(5);   // radius = 5
$square = new Square(4);   // side = 4

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Square Area: " . $square->calculateArea();

?>
