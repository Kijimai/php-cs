<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
$myName = "Slippin' Jimmy";
$age = 48;
$has_kids = false;
$cash_on_hand = 20.75;

print($myName);
var_dump($cash_on_hand);

// Concatenating variables with string using .
echo $name . ' is ' . $age . ' years old';

// Template literals -- needs double quotes.
echo "${name} is ${age} years old";

// using + adds numbers together even if they're strings
// also applicable to other math operators
echo '5' + '5';

// . will concatenate them
echo "5" . "5";


// Defining constant variables -- creates during runtime
define("HOST", "localhost");
print(HOST);

define("DB_NAME", "BlehBleh");
print(DB_NAME);

$A_CONSTANT = "HELLO I AM A CONSTANT";
echo $A_CONSTANT;
?>