<?php
$servername = 'localhost';
$username= 'root';
$password= '';
$database = "sakila";


$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die ("Connection failed: ".mysqli_connect_error());
}

echo "Connected successfully <br>";

$all = mysqli_query($conn,"Select * from actor");

print_r($all);

mysqli_close($conn);

echo "<br>";
echo "<br>";
echo "<br>";

$verse = mysqli_fetch_row($all);
print_r($verse);

while($all_data = mysqli_fetch_assoc($all)){
    print_r($all_data);
    echo "<br>";
}


?>
