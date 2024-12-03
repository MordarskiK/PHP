<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'biuro_podrozy';

$conn = mysqli_connect($server,$user,$pass,$database);


// if(!$conn){
//     echo "Nie ma polaczenia z baza";
// }else{
//     echo "<a href='main_page.php'>main_page</a>";
//     // header('location:main_page.php');
//     // exit;
// }
?>