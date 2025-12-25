<?php

class Student {

    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private property
    private $tuition = 50000; // example value

    // Protected property
    protected $indexNumber = "BCA-2023-05";

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Getter for surname
    public function getSurname() {
        return $this->surname;
    }

    // Public method
    public function helloWorld() {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily() {
        return "Hello Family";
    }

    // Private method
    private function helloMe() {
        return "Hello me!";
    }

    // Private getter for tuition
    private function getTuition() {
        return $this->tuition;
    }

    // Public method to call private getTuition()
    public function showTuition() {
        return "Tuition Fee: " . $this->getTuition();
    }

    // Public method to call private helloMe()
    public function showHelloMe() {
        return $this->helloMe();
    }
}


// Subclass
class PartTimeStudent extends Student {

    // Public method calling protected parent method
    public function helloParent() {
        return $this->helloFamily();
    }
}


// ----------------------------
// Create Student object
// ----------------------------

$std = new Student();
$std->name = "Alisha";
$std->surname = "Khatri";
$std->country = "Nepal";

// Calling methods
echo $std->helloWorld() . "<br>";
echo $std->getName() . "<br>";
echo $std->getSurname() . "<br>";
echo $std->showHelloMe() . "<br>";
echo $std->showTuition() . "<br><br>";


// ----------------------------
// Create PartTimeStudent object
// ----------------------------

$ptStd = new PartTimeStudent();
$ptStd->name = "Binisha";
$ptStd->surname = "Shrestha";
$ptStd->country = "Nepal";

// Calling inherited + subclass methods
echo $ptStd->helloWorld() . "<br>";
echo $ptStd->helloParent() . "<br>";  // calling protected parent method
echo $ptStd->getName() . "<br>";
echo $ptStd->getSurname() . "<br>";

?>
