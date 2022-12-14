<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

// Must be invoked before making use of session to store session values.
session_start();

if(isset($_POST["submit"])) {
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

  $password = $_POST["password"];

  if($username == 'john' &&  $password == 'password') {
    $_SESSION["username"] = $username;
    header("Location: /php-crash/extras/dashboard.php");
  } else {
    echo ("Incorrect credentials.");
  }
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" />
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"/>
  </div>
  <button type="submit" value="submit" name="submit">Submit</button>
</form>