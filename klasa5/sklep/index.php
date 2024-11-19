<?php
$conn = mysqli_connect('localhost','root','','sklep');

if(!$conn){
    echo "baza nie dziala";
}else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hurtownia szkolna</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <header>
            <h1>Hurtownia z najlepszymi cenami</h1>
        </header>
        <main>
            <div class="left">
                <h2>Nasze ceny</h2>
                <?php
                $zapytanie = mysqli_query($conn, "SELECT towary.nazwa, towary.cena FROM towary LIMIT 4;");
                if(!$zapytanie){
                    echo "blad zapytania";
                }else{
                    echo "<table>";
                    while($wiersze = mysqli_fetch_row($zapytanie)){
                        echo "<tr><td>".$wiersze[0]."</td><td>".$wiersze[1]."</td></tr>";
                    }
                    echo "</table>";
                }
                ?>
            </div>
            <div class="mid">
                <h2>Koszt zakupów</h2>
                <form action="#" method="post">
                    <label for="article">
                        wybierz artykół:
                        <select name="article" id="article">
                            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                            <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                            <option value="Cyrkiel">Cyrkiel</option>
                            <option value="Linijka 30 cm">Linijka 30 cm</option>
                        </select>
                    </label>
                    <label for="number">
                        liczba sztuk:
                        <input type="number" name="number" id="number">
                    </label>
                    <input type="submit" value="OBLICZ">
                    <?php
                        if(isset($_POST['article']) && isset($_POST['number'])){
                            $article = $_POST['article'];
                            $number = $_POST['number'];
                            $sql = mysqli_query($conn, "SELECT towary.cena FROM towary WHERE towary.nazwa = '$article';");
                            $cost = mysqli_fetch_row($sql)[0];
                            echo "<p>Cena = ".floatval($number)*floatval($cost)."zł</p>";
                        }
                    ?>
                </form>
            </div>
            <div class="right">
                <h2>Kontakt</h2>
                <img src="zakupy.png" alt="hurtownia">
                <p>e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p>
            </div>
        </main>
        <footer>
            <h4>Witryne wykonał: MK</h4>
        </footer>
    </body>
</html>

<?php
}
mysqli_close($conn);
?>