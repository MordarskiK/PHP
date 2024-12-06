<?php
include 'server_connection.php';

print_r($_POST['pick']);

mysqli_query($conn,"INSERT INTO bilety(id_oferty,id_user) VALUES (".$_POST['pick'].",2)");

header("Location:main_page.php");
exit();
?>