<?php
$conn = mysqli_connect('localhost','root','','biblioteka');

if(!$conn){
    echo "blad polaczenia";
    exit;
}else{
    echo "wszystko gra";
    $zapytanie = mysqli_query($conn," SELECT autorzy.imie, autorzy.nazwisko FROM autorzy
                                ORDER BY autorzy.nazwisko ASC");

    if(!$zapytanie){
        echo "blad w zapytaniu";
        mysqli_close($conn);
        exit;
    }else{
        echo "<h3> Polecamy dzieła autorów </h3>";

        echo "<ol>";
        while($wiersze = mysqli_fetch_array($zapytanie)){
            echo "<li>$wiersze[imie] $wiersze[nazwisko]</li>";
        }
        echo "</ol>";
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
        <form action="#" method="post">
            <label for="imie">
                Imie <input type="text" name="imie" id="imie">
            </label>
            <label for="nazwisko">
                Nazwisko <input type="text" name="nazwisko" id="nazwisko">
            </label>
            <label for="symbol">
                Symbol <input type="number" name="symbol" id="symbol">
            </label>
            <button type="submit">DODAJ</button>
        </form>
        <?php
        if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["symbol"])){
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $kod = $_POST["symbol"];
            
            $add = mysqli_query($conn,"INSERT INTO czytelnicy(imie,nazwisko,kod) VALUES('$imie','$nazwisko','$kod')");
            
            echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych";
        }
        mysqli_close($conn);
        ?>
</body> 
</html>