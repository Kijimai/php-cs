<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
$age = 20;

// if($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry you are not old enough to vote;';
// }

$timezoneId = "America/Los_Angeles";
date_default_timezone_set($timezoneId);

$t = date("H");
// var_dump($t);
// if($t < 12) {
//   echo "Good Morning!";
// } elseif ($t < 17) {
//   echo "Good Afternoon";
// } else {
//   echo "Good evening";
// }

$posts = ["My First Post!"];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo "There are no posts right now.";
// }

// Ternary operator
// echo !empty($posts) ? $posts[0] : 'There are no posts right now';

// Coalescing Operator
$firstPost = $posts[0] ?? null;
// echo $firstPost;

$favColor = "redss";

switch($favColor) {
  case 'red':
    echo "Your favorite color is red";
    break;
  case "blue":
    echo "Your favorite color is blue, dabadee.";
    break;
  default:
    echo "We dont have any matching colors :(";
}

?>