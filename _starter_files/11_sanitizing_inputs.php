<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/


if(isset($_POST["submit"])) {
  // $name =  filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
  // $age =  htmlspecialchars($_POST["age"]);
  // $age =  filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
  $name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
  // echo $age;
}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Steve"/>
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="0" value="0"/>
  </div>
  <button type="submit" value="submit" name="submit">Submit</button>
</form>