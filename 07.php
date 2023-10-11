<?php
include 'includes/header.php';

// Métodos
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

        // Llamar método dentro del constructor
        $this->printInfo();
    }

    // métodos
    public function printInfo(): void
    {
        echo "My name is " . $this->name . ", I am " . $this->age . " years old, I live in " . $this->city . " in " . $this->country;
    }

    public function countryEmployee(): string
    {
        return $this->country;
    }
}

$person = new Employee('John', 30, 'USA', 'New York');
$person->printInfo();
$country = $person->countryEmployee();


echo "<pre>";
var_dump($person);
echo "</pre>";

echo $country;