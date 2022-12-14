<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for ($x = 0; $x <= 10; $x++) {
//   echo "${x}<br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $x = 1;
// while($x <= 10) {
  // echo "${x} <br>";
  // All of these are the same.
  // $x++;
  // $x += 1;
  // $x = $x + 1;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;

// do {
//   echo "Number: ${x} <br>";
//   $x++;
// } while ($x <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $posts = ["First post", "Second Post", "Third Post"];

// for($x = 0; $x < count($posts); $x++) {
//   echo "My post: $posts[$x] <br>";
// }

// foreach($posts as $index => $post) {
//   echo $index + 1 . " - ${post} <br>";
// }

$person = [
  "first_name" => "James",
  "last_name" => "Bond",
  "email" => "James@mail.com"
];

foreach($person as $key => $value) {
  echo "${key} - ${value} <br>";
}

?>