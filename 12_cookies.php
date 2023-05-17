<?php
/* ------------- Cookies ------------ */
setcookie('name', 'Jin', time() + 86400); //在目前时间之后86400seconds内,设定name 的value为Jin

//use
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

//unset
setcookie('name', '', time() - 86400);
/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/
