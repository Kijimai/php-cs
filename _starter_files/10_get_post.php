<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST["submit"])) {
  echo $_POST["name"];
  echo $_POST["age"];
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