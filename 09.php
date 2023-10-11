<?php
include 'includes/header.php';

// Getters and setters
// Get -> Obtener valor
// Set -> Asignar o cambiar valor

class Employee
{
    public $name;
    public $age;
    public $country;
    public $city;

    public function __construct($name, $age, $country, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
        $this->city = $city;
    }

    // Obtener el nombre (GET)
    public function getName(): string
    {
        return $this->name;
    }

    // Modificar el nombre (SET)
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

$person = new Employee('John', 30, 'USA', 'New York');

echo $person->getName();
echo "<br>";

$person->setName('Jane');

echo "<pre>";
var_dump($person);
echo "</pre>";