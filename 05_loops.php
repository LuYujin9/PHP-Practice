<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */
for ($x = 4; $x < 10; $x++) {
  echo $x . '<br>';
}


/* ------------ While Loop ------------ */
$x = 1;
while ($x < 5) {
  echo $x . '<br>';
  $x++;
}

/* ---------- Do While Loop --------- */

//do...while loop will always execute the block of code once, even if the condition is false.
do {
  echo '<br>';
  echo $x . '<br>';
  $x++;
} while ($x < 0);



/* ---------- Foreach Loop ---------- */
$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x++) { // 数列的长度 chount length
  echo $posts[$x];
}
echo '<br>';

foreach ($posts as $post) { //js .foreach((post)=>{})
  echo $post . '<br>';;
}

foreach ($posts as $index => $post) { //js .foreach((post)=>{})
  echo $index + 1 . $post . '<br>';
}

$persons = [
  ['first_name' => 'Jane', "last_name" => 'Lu'],
  ['first_name' => 'John', "last_name" => 'Liu']
];

foreach ($persons as $index => $person) { //js .foreach((post)=>{})
  echo $index + 1 . $person . '<br>';
}
$person =  ['first_name' => 'Jane', "last_name" => 'Lu'];
foreach ($person as $key => $value) {
  echo "$key : $value  <br>";
}

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
