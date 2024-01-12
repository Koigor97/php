<?php 
// String type
$name = 'John Doe';
$name2 = "KoiMonga";

var_dump($name);
echo '<br>';
echo getType($name2);

// Integer type
$year = 2020;
$age = 30;

echo '<br>';
var_dump($year);
echo '<br>';    

// Float type
$price = 9.99;
var_dump($price);
echo '<br>';

// Boolean type
$isPlaying = true;
$isSleeping = false;
var_dump($isPlaying);
echo '<br>';    

// Array type
$fruits = ['Apple', 'Banana', 'Orange'];
var_dump($fruits); 
echo '<br>';

// Object type
$person = new stdClass();
$person->name = 'John Doe';
$person->age = 30;
var_dump($person);
echo '<br>';

// Null type
$city = null;
var_dump($city);
echo '<br>';

// Resource type
$file = fopen('common.txt', 'w');
var_dump($file);
echo '<br>';


// control structures and conditional statements
// if statement
$age = 20;

if ($age > 18) {
    echo 'You can drink beer';
} else {
    echo 'You can drink juice';
}
echo '<br>';

// if-else statement
$age = 20;

if ($age > 18) {
    echo 'You can drink beer';
} elseif ($age > 15) {
    echo 'You can drink juice';
} else {
    echo 'You can drink milk';
}
echo '<br>';

// nested if statement
$age = 20;
$country = 'Kenya';

if ($age > 18) {
    if ($country === 'Kenya') {
        echo 'You can drink beer';
    } else {
        echo 'You can drink juice';
    }
} else {
    echo 'You can drink milk';
}
echo '<br>';

// switch statement
$color = 'red';

switch ($color) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is something else';
        break;
}
echo '<br>';

// while loop
$i = 0;

while ($i < 10) {
    echo $i;
    $i++;
}
echo '<br>';

