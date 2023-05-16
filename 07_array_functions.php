<?php
/* --------- Array Functions -------- */
$fruits = ['apple', 'orange'];

//length
echo count($fruits);
echo '<br>';

//Search array, return boolen value
var_dump(in_array('apple', $fruits));

//add to array
$fruits[] = 'grape';
array_push($fruits, 'banana', 'annanas');
array_unshift($fruits, 'mango');

//remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]); // remove the value of this index


//split into 2 chunks
$chunked_array = array_chunk($fruits, 2); //拆分, 2就是拆分为每个数列含2个value

print_r($fruits);
echo '<br>';

print_r($chunked_array);
echo '<br>';

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2); //合并数列
$arr4 = [...$arr1, ...$arr2];

print_r($arr3);
echo '<br>';

print_r($arr4);
echo '<br>';

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b); // 数列合并为object, 前者为key

print_r($c);
echo '<br>';

$keys = array_keys($c); //提取key,return一个数列
print_r($keys);
echo '<br>';

$flipped = array_flip($c); //调换key和value
print_r($flipped);
echo '<br>';

$numbers = range(1, 5);
print_r($numbers);
echo '<br>';

$newNumbers = array_map(function ($number) {
  return "Number $number";
}, $numbers); //numbers 是数列, 每一个定义为number
print_r($newNumbers);
echo '<br>';

$lessThan10 = array_filter($numbers, fn ($number) => $number <= 3);
print_r($lessThan10);
echo '<br>';

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
print_r($sum);
echo '<br>';
/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
