<?php
/* ----------- Arrrays ----------- */
$numbers = [1, 2, 3, 4];
$fruits = array(1, 2, 3);

var_dump($numbers);
echo '<br>';

print($numbers);
echo '<br>';

print_r($numbers);
echo '<br>';


/* ----------- Associative Arrrays ----------- */
$colors = [1 => 'red', 4 => 'blue']; // 定义index 4 对应的value
echo $colors[4];
var_dump($colors);
echo '<br>';

$hexs = ['blue' => '#0f0', 'green' => '#00f']; // 类似于js的object
echo $hexs['blue'];
var_dump($hexs);
echo '<br>';

$person = ['first_name' => 'jane', "last_name" => 'lu'];
echo $person['first_name'];
echo '<br>';

$persons = [
  ['first_name' => 'Jane', "last_name" => 'Lu'],
  ['first_name' => 'John', "last_name" => 'Liu']
];
echo $persons;
echo $persons[1]['last_name'];
echo '<br>';

var_dump($persons);
var_dump(json_encode($persons));// transfers to json

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
