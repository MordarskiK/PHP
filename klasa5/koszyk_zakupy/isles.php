<?php
session_start();

if(!isset($_SESSION['store'])){
    header("location:store.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk Zakupowy</title>
</head>
<body>
    <form action="checkout.php" method="post">
        <p>Mleko: <input type="checkbox" name="stuff[]" value="mleko"></p>
        <p>Płatki: <input type="checkbox" name="stuff[]" value="płatki"></p>
        <p>Woda: <input type="checkbox" name="stuff[]" value="woda"></p>
        <p>Jabłko: <input type="checkbox" name="stuff[]" value="jabłko"></p>
        <p>Banan: <input type="checkbox" name="stuff[]" value="banan"></p>
        <p>Pomarańcza: <input type="checkbox" name="stuff[]" value="pomarańcza"></p>
        <input type="submit" value="Zapłać">
    </form>
</body>
</html>