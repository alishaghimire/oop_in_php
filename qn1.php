<?php

// -----------------------
// Vehicle Interface
// -----------------------
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

// -----------------------
// Car Class
// -----------------------
class Car implements Vehicle {
    // Encapsulation: private properties
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make  = $make;
        $this->model = $model;
        $this->year  = $year;
    }

    // Getter and Setter for make
    public function getMake() {
        return $this->make;
    }
    public function setMake($make) {
        $this->make = $make;
    }

    // Getter and Setter for model
    public function getModel() {
        return $this->model;
    }
    public function setModel($model) {
        $this->model = $model;
    }

    // Getter and Setter for year
    public function getYear() {
        return $this->year;
    }
    public function setYear($year) {
        $this->year = $year;
    }

    // Methods
    public function start() {
        echo "Car started.<br>";
    }

    public function displayInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }

    // Interface methods
    public function startEngine() {
        echo "Engine started (Vehicle interface).<br>";
    }

    public function stopEngine() {
        echo "Engine stopped (Vehicle interface).<br>";
    }

    // getDescription method (will be overridden)
    public function getDescription() {
        return "This is a normal car: {$this->make} {$this->model} ({$this->year})";
    }
}

// -----------------------
// ElectricCar Class
// -----------------------
class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Electric car is charging...<br>";
    }

    // Override getDescription()
    public function getDescription() {
        return "This is an electric car with battery capacity: {$this->batteryCapacity} kWh";
    }
}

// -----------------------
// Testing the Classes
// -----------------------
$car = new Car("Toyota", "Corolla", 2020);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "<br>";
$car->startEngine();
$car->stopEngine();

echo "<hr>";

$electricCar = new ElectricCar("Tesla", "Model S", 2022, 100);
$electricCar->start();
$electricCar->displayInfo();
echo $electricCar->getDescription() . "<br>";
$electricCar->charge();
$electricCar->startEngine();
$electricCar->stopEngine();

?>
