<?php


$file = fopen("cda.txt",'w');


$repeat = 5;

for ($i = 0;$i<$repeat;$i++){
    fwrite($file,"Młodości, dodaj mi skrzydła!"."\n");
}

fclose($file);

$file = fopen("cda.txt",'r');

// var_dump(fgets($file,20));
// echo "<br>";
// var_dump(feof($file));

while(feof($file)==false){
    print(fgets($file)."<br>");
}

var_dump(readfile("cda.txt"));

echo "<br>";
echo "<br>";

var_dump(file_get_contents("cda.txt"));

echo "<br>";

print_r(file("cda.txt"));


fclose($file);

$katalog = mkdir("katalog");
$file1 = fopen("katalog/file1.txt",'w');
$file2 = fopen("katalog/file2.txt",'w');
$file3 = fopen("katalog/file3.txt",'w');


print_r(scandir("katalog",1));
rmdir("katalog")
?>
