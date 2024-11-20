<?php
$conn = mysqli_connect('localhost','root','','kino');
if(!$conn){
    echo "not working";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINO „Za rogiem”</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="baner.jpg" alt="baner">
    </header>
    <div>
        <aside>
            <ul>
                <li>
                    <a href="index.html">Strona główna</a>
                </li>
            </ul>
            <hr>
            <form action="rezerwacje.php" method="post">
                Data i godzina seansu<br>
                <input type="date" name="date" id="date">
                <input type="time" name="time" id="time">
                <input type="submit" value="POKAŻ">
            </form>
        </aside>
        <main>
            <?php
            if(!isset($_POST['date']) || !isset($_POST['time'])){
                echo "Podaj poprawną datę i godzinę seansu";
            }else{
                $date = $_POST['date'];
                $time = $_POST['time'];
                
                // $date = "2022-08-09";
                // $time = "18:00";

                $zapytanie1 = mysqli_query($conn,"SELECT rezerwacje.Rzad, rezerwacje.Miejsce FROM rezerwacje WHERE rezerwacje.Data = '$date' AND rezerwacje.Godzina = '$time' ORDER BY rezerwacje.Rzad ASC, rezerwacje.Miejsce ASC");

                if($zapytanie1){
                    echo "EKRAN";
                    echo "<table>";
                    $wiersze = mysqli_fetch_all($zapytanie1);
                    // print_r($wiersze);
                    for($i = 1;$i<=15;$i++){
                        echo "<tr><th>",$i,"</th>";
                        for($j = 1;$j<=20;$j++){
                            $done = false;
                            foreach($wiersze as $table){
                                if($table[0] == $i && $table[1] == $j){
                                    echo "<td class='taken'>",$j,"</br>";
                                    $done = true;
                                }
                            }
                            if(!$done){
                                echo "<td class='empty'>",$j,"</br>";
                            }
                        }
                    }   
                    echo "</tr>";
                }
                echo "</table>";    
            }
            ?>
        </main>
    </div>
    <footer>
        <h5>Egzamin INF.03 - AUTOR: MK 5i</h5>
    </footer>
</body>
</html>