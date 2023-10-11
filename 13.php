<?php
include 'includes/header.php';
include 'DB.php';


// Comunicar 2 o mas clases
class Employee
{
    public static $name;
    private $age;
    public $country;
    public $city;

    public function __construct($name, $age, $country, $city)
    {
        self::$name = $name;
        $this->age = $age;
        $this->country = $country;
        $this->city = $city;

        // Llamar método dentro del constructor
        // $this->printInfo();
    }

    // métodos
    public function printInfo(): void
    {
        echo "My name is " . self::$name . ", I am " . $this->age . " years old, I live in " . $this->city . " in " . $this->country;
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

    //
    public static function getNameEstatic(): string
    {
        return self::$name; // Hacer referencia a los atributos estaticos
    }

    // METODOS ESTATICOS
    public static function getName(): void
    {
        echo 'Desde static getName';
    }
}


$employee = new Employee('Elmer Jacobo', 30, 'USA', 'New York');
$name = $employee::getNameEstatic();

echo $name;


$db = new DB('MySQL');
$db->save();