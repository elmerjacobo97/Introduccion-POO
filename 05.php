<?php
include 'includes/header.php';

// Tipado en PHP
class Employee {
  public $name;
  public $age;
  public $country;
  public $city;

  public function __construct(string $name, int $age, string $country, string $city) {
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