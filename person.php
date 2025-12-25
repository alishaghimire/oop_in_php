<?php
class person{
    // field/proprities
    private $name,$pid,$address,$phone,$gender;
    //setter fro name
    public function setName(){
        $this->name=$name;

    }
    //getter for name
    public function getName(){
        return $this->name;
    }
     public function setData($var,$value){
        $this->$var=$value;

    }
    //common setter for data
    public function getData(){
        return $this->$var;
    }
    //common setter for data
    public function setPersonData($n,$i,$a,$p,$g){
        $this->name=$n;
        $this->pid=$i;
        $this->address=$a;
        $this->phone=$p;
         $this->gender=$g;

    }
    public function getPersonDetails(){
        return "<br> Name " . $this->name.
        "<br/> PID:".$this->pid.
        "<br /> Address:".$this->address.
        "<br /> Gender". $this->gender.
        "<br /> Phone:".$this->phone; 
    }

}
$raju = new Person();
$raju->setName='Raju Lama';
$raju->setData('name', 'Raju Lama');
$raju->setData('pid', '12');
$raju->setData('address', 'kapan');
$raju->setData('phone', '98*****');
$raju->setData('gender', 'male');

// print_r($raju);
echo $raju->getPersonDetails();

?>