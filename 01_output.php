<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>

<body>
  <?php
  echo 'Hell..';
  echo 123;
  echo "Hello", 123;
  echo '<h1>Hello World</h1>';

  print 'Hello';
  print 123;

  // print_r - Gives a bit more info. Can be used to print arrays
  print_r('Hello');
  print_r([1, 2, 3]);

  // var_dump - Even more info like data type and length
  var_dump('Hello');
  var_dump([1, 2, 3]);
  var_dump(true);

  // with the punctuarions
  var_export("Hello");

  // Escaping characters with a backslash
  echo "Is your name o\'reilly?";

  ?>
  <h1>Hello<?php echo 'Brad'; ?></h1>
  <h1>Hello <?= 'Brad'; ?></h1>
</body>

</html>