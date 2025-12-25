<?php
class Student {

    public $name;
    public $surname;
    public $country;

    private $tuition;
    protected $indexNumber;

    
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function helloWorld() {
        return "Hello World";
    }


    protected function helloFamily() {
        return "Hello Family";
    }

 
    private function helloMe() {
        return "Hello Me!";
    }

   
    public function getTuition() {
        echo "Tuition: " . $this->tuition;
    }


    public function setTuition($t) {
        $this->tuition = $t;
    }

    public function setIndexNumber($i) {
        $this->indexNumber = $i;
    }
}



class PartTimeStudent extends Student {

    public function helloParent() {
        // Calling protected method of parent
        return $this->helloFamily();
    }
}





$std = new Student();
$std->name = "Alisha";
$std->surname = "Khatri";
$std->country = "Nepal";
$std->setTuition(50000);
$std->setIndexNumber("BCA123");

$pt = new PartTimeStudent();
$pt->name = "Sara";
$pt->surname = "Thapa";
$pt->country = "Nepal";
$pt->setTuition(25000);
$pt->setIndexNumber("PT987");


echo $std->helloWorld() . "<br>";
$std->getTuition();
echo "<br><br>";

echo $pt->helloWorld() . "<br>";
echo $pt->helloParent() . "<br>";
$pt->getTuition();
?>
