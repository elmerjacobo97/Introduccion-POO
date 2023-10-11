<?php
include 'includes/header.php';

// constructor property promotion
class Employee
{

    public function __construct(
        public string $name,
        public int    $age,
        public string $country,
        public string $city,
    )
    {

    }
}

$person = new Employee('John', 30, 'USA', 'New York');

echo "<pre>";
var_dump($person);
echo "</pre>";