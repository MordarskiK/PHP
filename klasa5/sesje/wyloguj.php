<?php

session_start();

if(isset($_SESSION)){
    unset($_SESSION['log']);
}else{
    header("location:sesje/log.php");
    exit();
}

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Wylogowales sie ze stony</p>
    <a href="log.php">Logowanie</a>
</body>
</html>