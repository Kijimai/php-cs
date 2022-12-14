<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/


//  Set a cookie
// 864000ms is equivalent to 1 day
// 864000 * 30 == 1 month

setcookie('name', "James", time() + 864000 * 30);

if(isset($_COOKIE["name"])) {
  echo $_COOKIE["name"];
}

// Deleting / unsetting a cookie
setcookie("name", "", time() - 864000);

?>


