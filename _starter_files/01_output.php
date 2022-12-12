<?php
/* -------- Output & Comments ------- */
// echo 123, "Hello", 10.5;

// print_r(["1", "2", "3"]);


// var_dump(true);
// var_dump("Hello");


// 
// var_export("Hello");
// Multi-line commenting
/*
  echo 1234;
  echo 1232323232;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo "Hello";?></h1>
  
  <!-- Works without including php keyword -->
  <h1><?= "Hello";?></h1>
</body>
</html>