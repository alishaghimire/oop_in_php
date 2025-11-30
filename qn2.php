<?php

class Bicycle {
    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight; // Stored in grams

    // Constructor (optional default description)
    public function __construct($brand = "", $model = "", $year = "", $weight = 0, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    // Getter: return bike info
    public function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    // Getter: return weight
    // Default in grams, but if $inKg is true → return in kg
    public function getWeight($inKg = false) {
        if ($inKg) {
            return $this->weight / 1000; // grams to kg
        }
        return $this->weight; // grams
    }

    // Setter: set weight (grams only)
    public function setWeight($weight) {
        $this->weight = $weight;
    }
}


// -----------------------
// Create two Bicycle objects
// -----------------------

$bike1 = new Bicycle("Giant", "Escape 3", 2020, 14000);
$bike2 = new Bicycle("Trek", "FX 1", 2022, 12500);

// -----------------------
// Print each bike’s information
// -----------------------

echo $bike1->getInfo() . "<br>";
echo $bike2->getInfo() . "<br><br>";

// -----------------------
// Print each bike’s weights
// -----------------------

echo "Bike 1 Weight in KG: " . $bike1->getWeight(true) . " kg<br>";
echo "Bike 1 Weight in Grams: " . $bike1->getWeight() . " g<br><br>";

echo "Bike 2 Weight in KG: " . $bike2->getWeight(true) . " kg<br>";
echo "Bike 2 Weight in Grams: " . $bike2->getWeight() . " g<br>";

?>
