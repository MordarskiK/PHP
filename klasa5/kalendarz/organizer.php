<?php

$conn = mysqli_connect('localhost','root','','kalendarz');

if(!$conn){
    echo "nia ma bazy danych";
}else{
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <div class='blok1'>
            <h1>Organizer: SIERPIEŃ</h1>
        </div>
        <div class='blok2'>
            <form action="#" method="post">
                <label for="event">
                    Zapisz wydzarzenie
                    <input type="text" name="event" id="event">
                </label>
                <input type="submit" value="OK">
            </form>
        </div>
        <div class='blok3'>
            <img src="logo2.png" alt="sierpień">
        </div>
    </header>
    <main>
        <?php
        if(isset($_POST['event'])){
            $date = '2020-08-09';
            $wpis = $_POST['event'];
            
            mysqli_query($conn, "UPDATE zadania SET wpis='$wpis' WHERE dataZadania = '$date'");
        }
        
        $sql = mysqli_query($conn, "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'sierpien';");
        
        while($wiersz = mysqli_fetch_row($sql)){
            echo "<div class='calendar'><h5>$wiersz[0]</h5><p>$wiersz[1]</p></div>";
        }

        ?>
    </main>
    <footer>
        <p>Stronę wykonał: MK 5i</p>
    </footer>
</body>
</html>
<?php
}
?>