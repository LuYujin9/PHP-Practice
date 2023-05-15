<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

$age = 17;
if ($age >= 18) {
  echo 'You are old enough to vote.';
} else {
  echo 'Sorry, you are not old enough to vote.';
}
echo '<br>';

$t = date("H"); //date 函数 读取目前的时间
if ($t < 12) {
  echo 'Good Morning';
} elseif ($t < 17) {
  echo 'Good Afternoon';
}
echo '<br>';

$posts = ['First Post'];
if (!empty($posts)) {
  echo 'Time is there';
}
echo '<br>';

var_dump($posts);
echo '<br>';

/* -------- Ternary Operator -------- */

echo !empty($posts) ? $posts[0] : 'No Posts';
//$firstPost = !empty($posts) ? $posts[0] : null;
$firstPost =  $posts[0] ?? null;
var_dump($firstPost);
echo '<br>';


/* -------- Switch Statements ------- */

$favColor = 'blue';
switch ($favColor) {
  case 'red':
    echo 'Your favorite color is red.';
    break;
  case 'green':
    echo 'Your favorite color is green.';
    break;
  default:
    echo 'Your favorite color is neither green nor red.';
}
