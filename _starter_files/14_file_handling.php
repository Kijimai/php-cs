<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file_path = "../extras/users.txt";

if(file_exists($file_path)) {
  // echo readfile($file_path);
  $handle = fopen($file_path, 'r');
  $contents = fread($handle, filesize($file_path));
  fclose($handle);
} else {
  $handle = fopen($file_path, "w");
  $contents = "Brad" . PHP_EOL . "Sara" . PHP_EOL . "Mike" . PHP_EOL . "Brepp";
  fwrite($handle, $contents);
  fclose($handle);
}

echo $contents;
?>
