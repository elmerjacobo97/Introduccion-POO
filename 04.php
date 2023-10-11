<?php
include 'includes/header.php';

// Constructor 
class Employee {
  public $name;
  public $age;
  public $country;
  public $city;

  public function __construct($name, $age, $country, $city) {
    $this->name = $name;
    $this->age = $age;
    $this->country = $country;
    $this->city = $city;
  }
}

$person = new Employee('John', 30, 'USA', 'New York');

echo "<pre>";
var_dump($person);
echo "</pre>";