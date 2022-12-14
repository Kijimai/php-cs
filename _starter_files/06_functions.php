<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$y = 12;

function registerUser() {
  global $y;
  echo $y . "<br>";
  $x = 10;
  echo "User register <br>";
  echo "I have been called!";
}

// Below echo will be undefined because it is function scoped.
// echo $x;
// registerUser();

function anotherFunction($email) {
  echo "<br>" . $email;
}

// anotherFunction("Jeebs");

function sum ($n1 = 0, $n2 = 1) {
  return $n1 + $n2;
}

$added = sum(1, 4);
$noArgs = sum();
// echo "<br> ${added}";
// echo "<br> ${noArgs}";

$subtract = function ($n1 = 5, $n2 = 5) {
  return $n1 - $n2;
};

// echo "<br>" . $subtract();

$multiply = fn($n1, $n2) => $n1 * $n2;
echo "<br>" . $multiply(2, 5);
?>