<?php

touch("file1.txt");

//fopen("fileName",'type') type: r(read) / w(write) / a(append) 

$temp = fopen("file1.txt","r");
var_dump($temp);

fclose($temp);


fopen("file2.txt","r"); //nope 
fopen("file2.txt","w"); //ok

echo "<br>";

var_dump(file_exists("file3.txt"));

echo "<br>";

var_dump(is_file('file2.txt'));



touch("file3.txt");
$file3 = fopen("file3.txt","w");
fwrite($file3,"Hello World");
fclose($file3);


// include
// require

unlink("file2.txt");

echo "<br>";

// include("extra.php");
require("extra.php");

hello("Man");

?>
