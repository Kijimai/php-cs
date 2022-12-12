<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 22, 355, 4, 5];

$fruits = array('apple', 'orange', 'avocado');

// print_r($fruits);

// print_r($numbers);

// var_dump($numbers);

// echo $fruits[2];

$colors = [1 => 'red', 0 => 'green', 29 => "lightorange"];
// echo $colors[29];

// Associative arrays
$hex = [
  "white" => "#fff",
  "black" => "#000",
];

// echo $hex["white"];

$people = [
  [
    "first_name" => "James",
    "last_name" => "Bond",
    "email" => "jbond@mail.com"
  ],
  [
    "first_name" => "Jane",
    "last_name" => "Doe",
    "email" => "jdoe@mail.com"
  ]
];

// echo $people[0]["email"];
$encoded_people = json_encode($people);
$decoded_people = json_decode($encoded_people);

// var_dump($encoded_people);
var_dump($decoded_people);
?>