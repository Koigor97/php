<?php

echo '<h1>Working with Date</h1>';

$output = '';
$output .= date('Y');

echo $output;
echo '<br>';

// array
$fruits = ['Apple', 'Banana', 'Orange'];
$numbers = [1, 2, 3, 4, 5];

// print_r($fruits);
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// inspect($fruits);
// inspect($numbers);
echo '<br>';

// Add element to array
$fruits[] = 'Mango';
// inspect($fruits);

array_push($fruits, 'Pineapple');
// inspect($fruits);

// update element in array
$numbers[0] = 10;
// inspect($numbers);

// array method that return new array
echo 'Using array_map()';
$numbers2 = array_map(function ($number) {
    return $number * 2;
}, $numbers);
inspect($numbers2);

// array method that return new array
echo 'Using array_filter()';
$numbers3 = array_filter($numbers, function ($number) {
    return $number > 3;
});
inspect($numbers3);

// array method that return new array
echo 'Using array_slice()';
$numbers4 = array_slice($numbers, 0, 2);
inspect($numbers4);

// array method that return new array
echo 'Using array_splice()';
array_splice($numbers, 0, 2);
inspect($numbers);

// array method that return new array
echo 'Using array_merge()';
$numbers5 = array_merge($numbers, $numbers2);

// array_sum()
echo 'Using array_sum()';
$sum = array_sum($numbers);
inspect($sum);

//  in_array()
echo 'Using in_array()';
$inArray = in_array(1, $numbers);
inspect($inArray);



// array method that mutate the array
echo 'Using array_pop()';
array_pop($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using array_shift()';
array_shift($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using array_unshift()';
array_unshift($numbers, 1);
inspect($numbers);

// array method that mutate the array
echo 'Using array_push()';
array_push($numbers, 5);
inspect($numbers);

// array method that mutate the array
echo 'Using array_reverse()';
$numbers6 = array_reverse($numbers);
inspect($numbers6);

// array method that mutate the array
echo 'Using sort()';
sort($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using rsort()';
rsort($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using asort()';
asort($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using arsort()';
arsort($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using ksort()';
ksort($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using krsort()';
krsort($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using usort()';
usort($numbers, function ($a, $b) {
    return $a - $b;
});
inspect($numbers);

// array method that mutate the array
echo 'Using pop()';
array_pop($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using shift()';
array_shift($numbers);
inspect($numbers);

// array method that mutate the array
echo 'Using unshift()';
array_unshift($numbers, 1);
inspect($numbers);

// array method that mutate the array
echo 'Using push()';
array_push($numbers, 5);
inspect($numbers);

// array method that mutate the array
echo 'Using reverse()';
$numbers6 = array_reverse($numbers);
inspect($numbers6);

