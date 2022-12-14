<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

// $fruits = ["apple", "orange", "pear"];

// Count # of array elements
// echo count($fruits);

// var_dump(in_array("apple", $fruits));


// Add to array
$fruits[] = "grape";
$fruits[] = "avocado";
$fruits[] = "mango";
// Add to end of array
array_push($fruits, "Blueberry");

// Add to beginning of array
array_unshift($fruits, "strawberry");
// print_r($fruits);

// Remove from beginning(shift) or end(pop) 

array_shift($fruits);
array_pop($fruits);
// unset($fruits[2]);
// print_r($fruits);

// Split into nested arrays containing 2 items, change the number to adjust nested array size
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr3, ...$arr2, ...$arr1];
// print_r($arr3);

// Using spread operator 
// print_r($arr4);

// array_combine uses the first array passed in as the keys and the second array as the values -- they must be of the same length
$a = ["green", 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
// print_r($c);

// array_keys will take the values of the keys only and assigns them their respective indexes as the new keys.
$keys = array_keys($c);
// print_r($keys);


// Flip the values of array's associated with its keys
$flip = array_flip($keys);
// print_r($flip);

$myNumbers = range(1, 20);
// print_r($myNumbers);

// creates a new array based on the element in an existing array
$newNumbers = array_map(function ($number) {
  return "Number: ${number}";
}, $myNumbers);

// print_r($newNumbers);

$lessThan10 = array_filter($myNumbers, fn($number) => $number < 10);

// print_r($lessThan10);

$sum = array_reduce($myNumbers, fn($carry, $number) => $carry + $number);
// print($sum);


?>