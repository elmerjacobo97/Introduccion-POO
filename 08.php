<?php
include 'includes/header.php';


// Modificadores de acceso
// Public -> Acceso público (Acceso en cualquier parte del código)
// Private -> Acceso privado (Acceso en la misma clase)
// Protected -> Acceso protegido (Acceso en las clases hijas)


class Employee
{
    public $name;
    private $age;
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

    // Cambiar edad cuando el modificador de acceso sea private
    public function changeAge(int $newAge): void
    {
        $this->age = $newAge;
    }
}

$person = new Employee('John', 30, 'USA', 'New York');
$person->printInfo();
$country = $person->countryEmployee();

$person->changeAge(40);


echo "<pre>";
var_dump($person);
echo "</pre>";

echo $country;