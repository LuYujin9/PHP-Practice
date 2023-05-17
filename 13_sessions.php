<?php
/* ------------ Sessions ------------ */
/*
Sessions are a way to store information (in variables) to be used across multiple pages.
Unlike cookies, sessions are stored on the server. 所以适合用于login
*/
session_start(); //开始一个session
if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];
  echo $username;
  if ($username === 'Jin' && $password === '123') {
    $_SESSION['username'] = $username;
    header('Location:/extras/dashboard.php'); //类似于push的功能, 跳转页面
  } else {
    echo ',this is a incorrect Login';
  }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <label for="username">
    Username:
  </label>
  <input type="text" name="username">
  <label for="password">
    Password:
  </label>
  <input type="text" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>