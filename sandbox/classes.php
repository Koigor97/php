<?php

// using classes
class Person
{
    // properties
    public $name;
    public $email;
    // constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' created<br>';
    }
    // destructor
    public function __destruct()
    {
        echo __CLASS__ . ' destroyed<br>';
    }
    // methods
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name . '<br>';
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email . '<br>';
    }
}

// instantiate a person object from the Person class
$person1 = new Person('John Doe', 'johnny@examole.com');
$person1->setName('Sammy Koech');
echo $person1->getName();
echo '<br>';

print_r($person1);

// getters and setters
$person1->setName('John Doe');
echo $person1->getName();
echo '<br>';
$person1->setEmail('johnn@emai.com');
echo $person1->getEmail();
echo '<br>';

// inheritance
class Customer extends Person
{
    private $balance;
    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email);
        $this->balance = $balance;
        echo 'A new ' . __CLASS__ . ' has been created<br>';
    }
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance . '<br>';
    }
}

$customer1 = new Customer('John Doe', 'johnn@emai.com', 3000);
echo $customer1->getBalance();
echo '<br>';

// static properties and methods
class User
{
    public $name;
    public $age;
    public static $minPassLength = 6;
    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }
    }
}

$password = 'hello';
if (User::validatePass($password)) {
    echo 'Password valid';
} else {
    echo 'Password not valid';
}
echo '<br>';

// abstract classes
abstract class Animal
{
    public $name;
    public $color;
    public function describe()
    {
        return $this->name . ' is ' . $this->color;
    }
    abstract public function makeSound();
}

class Duck extends Animal
{
    public function describe()
    {
        return parent::describe();
    }
    public function makeSound()
    {
        return 'Quack';
    }
}


$animal = new Duck();
$animal->name = 'Donald';
$animal->color = 'white';
echo $animal->describe();
echo '<br>';

// interfaces
interface AnimalInterface
{
    public function makeSound();
}

class Dog implements AnimalInterface
{
    public function makeSound()
    {
        return 'Bark';
    }
}

class Cat implements AnimalInterface
{
    public function makeSound()
    {
        return 'Meow';
    }
}

$dog = new Dog();
$cat = new Cat();
echo $dog->makeSound();
echo '<br>';

// private, public and protected
class Car
{
    private $model;
    public function getModel()
    {
        return 'The car model is ' . $this->model;
    }
}

$car = new Car();
// $car->model = 'BMW'; // will not work
echo $car->getModel();
echo '<br>';


// superglobals
// $_SERVER
// echo $_SERVER['SERVER_NAME'] . '<br>';
// echo $_SERVER['REQUEST_METHOD'] . '<br>';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
// echo $_SERVER['PHP_SELF'] . '<br>';
// echo $_SERVER['REMOTE_ADDR'] . '<br>';
// echo '<br>';

// // $_GET
// print_r($_GET);
// echo '<br>';
// echo $_GET['name'] . '<br>';
// echo $_GET['email'] . '<br>';
// echo '<br>';

// // $_POST
// print_r($_POST);
// echo '<br>';
// echo $_POST['name'] . '<br>';
// echo $_POST['email'] . '<br>';
// echo '<br>';

// // $_REQUEST
// print_r($_REQUEST);
// echo '<br>';
// echo $_REQUEST['name'] . '<br>';
// echo $_REQUEST['email'] . '<br>';
// echo '<br>';

// // $_FILES
// print_r($_FILES);
// echo '<br>';
// echo $_FILES['file']['name'] . '<br>';
// echo $_FILES['file']['size'] . '<br>';
// echo $_FILES['file']['tmp_name'] . '<br>';
// echo $_FILES['file']['error'] . '<br>';
// echo '<br>';

// // $_SESSION
// if (isset($_POST['submit'])) {
//     session_start(); // start session
//     $_SESSION['name'] = $_POST['name'];
//     echo $_SESSION['name'] . '<br>';
//     header('Location: index.php');
// }
// echo '<br>';

// // $_COOKIE
// $cookieName = 'user';
// $cookieValue = 'John Doe';
// setcookie($cookieName, $cookieValue, time() + (86400 * 30)); // 1 day
// if (!isset($_COOKIE[$cookieName])) {
//     echo 'Cookie named ' . $cookieName . ' is not set';
// } else {
//     echo 'Cookie ' . $cookieName . ' is set<br>';
//     echo 'Value is ' . $_COOKIE[$cookieName] . '<br>';
// }

// // $_ENV
// echo '<br>';
// echo $_ENV['DB_HOST'] . '<br>';
// echo $_ENV['DB_USER'] . '<br>';
// echo $_ENV['DB_PASS'] . '<br>';
// echo $_ENV['DB_NAME'] . '<br>';

