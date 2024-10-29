<?php
session_start();

if(isset($_SESSION["lo"])){
    header("location:sesje.php");
    exit();
}elseif(isset($_POST['nazwa']) && isset($_POST['haslo'])){
    if($_POST['nazwa']=='janek' && $_POST['haslo']=='jan123'){
        $_SESSION['log']=$_POST['nazwa'];
        header("location: sesje.php");
        exit();
    }else{
        echo "Nieprawidłowe dane logowania!<br>";
    }
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
    <form action="log.php" method="post">
        <p>Logowanie: </p>
        <p>Nazwa urzytkownika:</p>
        <input type="text" name="nazwa" size="25"><br>
        <p>Hasło: </p>
        <input type="password" name="haslo" size="25"><br>
        <input type="submit" value="Zaloguj się">
    </form>
</body>
</html>