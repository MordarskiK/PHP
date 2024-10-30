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
    <?php
    if(isset($_POST['stuff'])){
        echo "<ol>";
        foreach($_POST['stuff'] as $elem){
            echo "<li>$elem</li>";
        }
        echo "</ol>";
        echo "<a href='store.php'>Zapłać i zakończ</a>";
    }else{
        echo "Wybierz jakies zakupy!<br>";
    }
    ?>
    <a href='isles.php'>wybór produktów</a>
    
</body>
</html>