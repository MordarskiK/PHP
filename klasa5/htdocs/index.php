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
            <table>
            <?php
                $server = "localhost";
                $user = "root";
                $pass = "";
                $data_base = "sklep";
                $conn = mysqli_connect($server,$user,$pass,$data_base);

                $sql = "SELECT towary.nazwa, towary.cena FROM towary LIMIT 4;";
                $result = mysqli_query($conn, $sql);

                while($key = mysqli_fetch_row($result)){
                    echo "<tr><td>".$key[0]."</td>";
                    echo "<td>".$key[1]."</td></tr>";
                }
                
            ?>  
            </table>
        </div>
        <div class="middle">
            <h2>Koszt zakupów</h2>
            <form action="#" method="post">
                <label for="article">
                    wybierz artykuł
                    <select name="article" id="article">
                        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                        <option value="Cyrkiel">Cyrkiel</option>
                        <option value="Linijka 30cm">Linijka 30cm</option>
                    </select>
                </label>
                <label for="amount">
                    liczba sztuk:
                    <input type="number" name="amount" id="amount" min=1 step=1 value=1>
                </label>
                <button name="countBtn">OBLICZ</button>
                <?php
                    if(isset($_POST["countBtn"])){
                        $option = $_POST['article'];
                        $input = $_POST['amount'];
    
                        $sql = "SELECT towary.cena FROM towary WHERE towary.nazwa = '$option';";
                        $result = mysqli_query($conn, $sql);
                        $cena = mysqli_fetch_row($result);
                        echo "<p>wartość zakupów: ".$cena[0]*$input."</p>";
                    }

                    mysqli_close($conn);
                ?>
            </form>
        </div>  
        <div class="right">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia" width=180>
            <p>e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </div>
    </main>
    <footer>
        <h4>Witrynę wykonał: Krzysztof M 5i</h4>
    </footer>
</body>
</html>

