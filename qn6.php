<?php

// -----------------------------
// USER CLASS
// -----------------------------
class User {

    protected $name;
    protected $surname;
    protected $username;

    protected $is_admin = false; // default value

    // Constructor
    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Check if user is admin
    public function isAdmin() {
        return $this->is_admin;
    }

    // Print full name
    public function fullName() {
        if ($this->is_admin) {
            return $this->name . " " . $this->surname . " (admin)";
        }
        return $this->name . " " . $this->surname;
    }
}


// -----------------------------
// CUSTOMER CLASS (extends User)
// -----------------------------
class Customer extends User {

    private $city;
    private $state;
    private $country;

    // Constructor – same parameters as User
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
    }

    // Setter methods
    public function setCity($city) { $this->city = $city; }
    public function setState($state) { $this->state = $state; }
    public function setCountry($country) { $this->country = $country; }

    // Getter methods
    public function getCity() { return $this->city; }
    public function getState() { return $this->state; }
    public function getCountry() { return $this->country; }

    // Location method
    public function location() {
        return "$this->city, $this->state, $this->country";
    }
}


// -----------------------------
// ADMINUSER CLASS (extends User)
// -----------------------------
class AdminUser extends User {

    // Constructor
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;   // set admin
    }
}


// -----------------------------
// CREATE OBJECTS
// -----------------------------

// Normal user
$user1 = new User("Alisha", "Khatri", "alishakhatri123");

// Customer
$customer1 = new Customer("Sara", "Shrestha", "sara_s");
$customer1->setCity("Kathmandu");
$customer1->setState("Bagmati");
$customer1->setCountry("Nepal");

// Admin user
$admin1 = new AdminUser("Hari", "Thapa", "bca");

// -----------------------------
// PRINT OUTPUT
// -----------------------------

echo $user1->fullName() . "<br>";
echo "Is Admin? " . ($user1->isAdmin() ? "Yes" : "No") . "<br><br>";

echo $customer1->fullName() . "<br>";
echo "Is Admin? " . ($customer1->isAdmin() ? "Yes" : "No") . "<br>";
echo "Location: " . $customer1->location() . "<br><br>";

echo $admin1->fullName() . "<br>";
echo "Is Admin? " . ($admin1->isAdmin() ? "Yes" : "No") . "<br>";

?>
