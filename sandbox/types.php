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
