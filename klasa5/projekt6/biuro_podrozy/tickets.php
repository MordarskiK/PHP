<?php
include 'server_connection.php';



?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <title>Biuro podróży</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
</head>
<body>
    <header>    
        <div class="baner">
            <div class="logo">
                <a href="main_page.php">
                    <img src="logo.jpeg" alt="logo" width="50px">
                </a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="main_page.php#book_now">Zarezerwuj teraz</a></li>
                    <li><a href="main_page.php#offers">Oferty</a></li>
                    <li><a href="main_page.php#about_us">O nas</a></li>
                    <li><a href="main_page.php#contact">Kontakt</a></li>
                    <li><a href="login.php">Zaloguj się</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class='offers'>
            <?php
            if(!isset($_POST['destination']) || !isset($_POST['when_start']) || !isset($_POST['when_end']) || !isset($_POST['people'])){
                header("Location:main_page.php");
                exit();
            }else{
                $destination = $_POST['destination'];
                $start = $_POST['when_start'];
                $end = $_POST['when_end'];
                $people = $_POST['people'];

                $offers = mysqli_query($conn, "SELECT * FROM oferty WHERE date_start >= '$start' AND date_end<= '$end'");
                if(!$offers){
                    echo "<h3>Brak ofert z twoimi specyfikacjami</h3>";

                }
                while($offer = mysqli_fetch_row($offers)){
                    print_r($offer);
                    $kraj = mysqli_fetch_row(mysqli_query($conn,"SELECT Nazwa FROM kraje WHERE ID_kraje = $offer[id_kraj]"));
                    echo "<div class='offer'><h2>".$kraj[0]."</h2><h3>".$offer['opis']."</h3><h3>od ".$offer['date_start']." do ".$offer['date_end']."</h3></div>";
                }
            }
            ?>
        </div>
    </main>
    <footer>
        <div class="contact" id="contact">
           <h4>Strone wykonał: MK 5i</h4>
        </div>
    </footer>           
</body>
</html>

<?php
// INSERT INTO users(name,pass) VALUES("gosc","");
?>