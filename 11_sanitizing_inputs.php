<?php
/* --- Sanitizing Inputs -- */
if (isset($_POST['submit'])) {
  /* $name = htmlspecialchars($_POST['name']); 搭配<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">,起到不被内容影响的作用
  */
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  //$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); 两种写法
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name;
  echo $age;
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <label for="name">
    Name:
  </label>
  <input type="text" name="name">
  <label for="age">
    Age:
  </label>
  <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>
/*
Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/