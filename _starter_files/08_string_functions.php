<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$myString = "Hello World";

// Returns the length of the passed in string.
// echo strlen($myString);

// Find the position of the first occurence of a substring in a string -- first argument is the string, second argument passed in is the letter we're looking for
// echo strpos($myString, 'l');

// strrpos finds the position of the last occurence of a substring in a string
// echo strrpos($myString, 'l');

// Reverse the string
// echo strrev($myString);

// Lower case the entire string
// echo strtolower($myString);

// Upper case the entire string
// echo strtoupper($myString);

// Uppercase the first letter of each word
// echo ucwords($myString);

// Replace the first argument with the second argument string, the third argument is the whole string
// echo str_replace("World", "Everyone", $myString);

// Case sensitive
// checks if a string contains the passed in argument
// if(str_starts_with($myString, "Hello")) {
//   echo "I AM IN THIS TEXT";
// }

// if(str_ends_with($myString, "World")) {
//   echo "IT ENDS WITH WORLD";
// }

$special_char = '&copy;';

echo $special_char;



// Both work essentially the same, avoids turning the text into an html element, they become basic strings despite the tags
$htmlEntityString = "<h1>I AM SOME H1 TEXT!</h1>";
echo htmlentities($htmlEntityString);

$specialCharString = "<script>alert(1)</script>";
echo htmlspecialchars($specialCharString);

printf("%s likes to %s", "Dude", "Drive");

printf('1+1=%f', 1 + 1);
?>