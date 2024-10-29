<?php

// session_start();

// $_SESSION['sesja1']="sesja1_value";

// $zmienna = $_SESSION['sesja1'];
// echo $zmienna;

// if(isset($_SESSION['sesja1'])){
//     echo "<br>jest";
// }

// session_unset(); // usuwa zmienne wszystkich sesji

// Unset($_SESSION['sesja1']); // usuwa zmienną podanej sesji

// session_destroy();

session_start();
if(!isset($_SESSION)){
    header("location:sesje/log.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imie = ucfirst($_SESSION['log']);
        echo 'Witaj '.$imie;
    ?>
    <p>Jesteś na stronie głównej</p>
    <p>Przed opuszczeniem strony wyloguj się!</p>
    <a href="wyloguj.php">Wyloguj</a>
</body>
</html>