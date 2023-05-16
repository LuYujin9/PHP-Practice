<?php
/* ------------ Functions ----------- */
$y = 'Email is';

function registerUser($email)
{
  // echo $y; can't directly access 
  global $y;
  echo $y;
  $x = 10; // only in function
  echo $email . 'is registered';
}

echo $x;
registerUser('123@hotmail.com');
echo '<br>';

function sum($n1, $n2)
{
  return $n1 + $n2;
}

$number = sum(5, 5);
echo $number;
echo '<br>';

function sumTwo($n1 = 4, $n2 = 5) //set default value
{
  return $n1 + $n2;
}
$number = sumTwo();
echo $number;
$number = sumTwo(5, 5);
echo $number;

/* ------------ Arrow functions ----------- */
$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

echo $subtract(1, 2);


$multiply = fn ($n1, $n2) => $n1 - $n2;
echo $multiply(1, 2);
