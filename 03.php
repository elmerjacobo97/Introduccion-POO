<?php
include 'includes/header.php';

// Atributos de una clase
class Person {
  public $name;
  public $age;
  public $gender;
  public $country;
  public $city;
}

$person = new Person;
$person->name = 'John';
$person->age = 30;
$person->gender = 'male';
$person->country = 'USA';
$person->city = 'New York';

echo "<pre>";
var_dump($person);
echo "</pre>";