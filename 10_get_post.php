<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])) { // submit为submit的name,用来对应点击事件
  echo $_POST['name']; //如果name的value是代码,会被作为代码执行. 例如<script>alert(1)</script>
  echo $_POST['age'];
}
/* echo $_GET['name'];
echo $_GET['age']; 当form的method 为get时,使用get来读取url里的值*/
?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Jane&age=30"> Click </a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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