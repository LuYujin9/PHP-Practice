<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';
if (file_exists($file)) {
  //echo readfile($file); access the data 后面的数字是文件的大小bite
  $handle = fopen($file, 'r'); // mode r => read https://www.php.net/manual/en/function.fopen.php
  $contents = fread($handle, filesize($file)); //access
  fclose($handle);
  echo $contents;
} else {

  $handle = fopen($file, 'w'); // only write
  $contents = 'Jin' . PHP_EOL . 'Sara'  . 'Paul'; // constant of PHP , when you want a new line or to be cross-platform
  fwrite($handle, $contents);
  fclose($handle);
}
