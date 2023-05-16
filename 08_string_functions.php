<?php
/* ---------- String Functions -------- */
$string = 'Hello World';

//length
echo strlen($string);
echo '<br>';

// index of the first one
echo strpos($string, 'o');
echo '<br>';

// index of the last one
echo strrpos($string, 'o');
echo '<br>';

//
echo strtolower($string);
echo '<br>';

// 每个单词的首字母大写
echo ucwords($string);
echo '<br>';

//
echo str_replace('World', 'Everyone', $string);
echo '<br>';

// portion of the string, 不含index 5
echo substr($string, 0, 5);
echo '<br>';

echo substr($string, 6);
echo '<br>';

// 区分大小写
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}
echo '<br>';

$string2 = '<h1>Hello</h1>';
echo $string2;

$string3 = '<script>alert("Look at here.")</script>';
echo $string3;
echo htmlspecialchars($string3); //把内容视为string 而不是code
echo '<br>';


printf('%s likes to %s', 'Jane', 'code');
printf('2+1= %d', 1 + 1);
printf('2+1= %f', 1 + 1);

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
