<?php

class Product {

    private $description;
    private $quantity;
    private $price;

    // Constructor
    public function __construct($description, $quantity, $price) {

        // Validation for description
        if (!is_string($description)) {
            echo "Error: Description must be a string!<br>";
        } else {
            $this->description = $description;
        }

        // Validation for quantity
        if (!is_numeric($quantity)) {
            echo "Error: Quantity must be a number!<br>";
        } else {
            $this->quantity = $quantity;
        }

        // Validation for price
        if (!is_numeric($price)) {
            echo "Error: Price must be a number!<br>";
        } else {
            $this->price = $price;
        }
    }

    // Getter and Setter for Description
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string!<br>";
        }
    }

    // Getter and Setter for Quantity
    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number!<br>";
        }
    }

    // Getter and Setter for Price
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number!<br>";
        }
    }

    // Method to calculate total price
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}


// -----------------------------
// Create Product Object
// -----------------------------

$product = new Product("Compute", 8, 2000000);

// Print all properties
echo "Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price (per item): " . $product->getPrice() . "<br>";

// Print calculated total price
echo "Total Price: " . $product->calculatePrice() . "<br>";

?>
