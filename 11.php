<?php
include 'includes/header.php';

// Clases abstractas -> no pueden ser instanciadas directamente (sirve como una plantilla)

abstract class Person
{
    public $name;
    public $country;

    public function __construct($name, $country)
    {
        $this->name = $name;
        $this->country = $country;
    }

    public function printInfo(): void
    {
        echo "My name is " . $this->name . ", I live in " . $this->country;
    }

    public function countryEmployee(): string
    {
        return $this->country;
    }
}

class Employee extends Person
{
    public $city;

    public function __construct($name, $country, $city)
    {
        parent:: __construct($name, $country);
        $this->city = $city;
    }


}

class Manager extends Person
{
    public $telephone;
    public $email;

    public function __construct($name, $country, $telephone, $email)
    {
        parent:: __construct($name, $country);
        $this->telephone = $telephone;
        $this->email = $email;
    }
}

//$person = new Person('John', 'USA'); // NO PUEDE SER INSTANCIADO PORQUE ES UNA CLASE ABSTRACTA
$employee = new Employee('John', 'USA', 'New York');
$manager = new Manager('Jane', 30, 'USA', 'elmer@gmail.com');

echo "<pre>";
var_dump($employee);
echo "</pre>";

echo "<pre>";
var_dump($manager);
echo "</pre>";

$employee->printInfo();
