<?php
declare(strict_types=1);
// working wwwith functions
// function with no parameters

function sayHello()
{
    echo 'Hello World';
}
sayHello();
echo '<br>';

// function with parameters
function sayHelloTo($name)
{
    echo "Hello $name";
}
sayHelloTo('John Doe');
echo '<br>';

// function with default parameters
function sayHelloToDefault($name = 'John Doe')
{
    echo "Hello $name";
}
sayHelloToDefault();
echo '<br>';

// function with return
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}
echo addNumbers(1, 2);
echo '<br>';

// function with return and default parameters
function addNumbersDefault($num1 = 0, $num2 = 0)
{
    return $num1 + $num2;
}
echo addNumbersDefault();
echo '<br>';

// Constants
define('NAME', 'John Doe');
echo NAME;
echo '<br>';

define('NAMES', ['John Doe', 'Jane Doe']);
echo NAMES[1];
echo '<br>';

// types declaration

function addNumbersStrict(int $num1, int $num2): int
{
    return $num1 + $num2;
}
echo addNumbersStrict(1, 2);

function addNumbersType(int $num1, int $num2)
{
    return $num1 + $num2;
}
echo addNumbersType(1, 2);

// type anonymous functions / lambda functions
$add = function ($num1, $num2) {
    return $num1 + $num2;
};
echo $add(1, 2);


