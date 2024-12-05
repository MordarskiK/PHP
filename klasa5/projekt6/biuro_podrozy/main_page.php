<?php
include 'server_connection.php';

session_start();
session_destroy();

$_SESSION['log'] = true;

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biuro podróży</title>
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
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
                    <li><a href="#book_now">Zarezerwuj teraz</a></li>
                    <li><a href="#offers">Oferty</a></li>
                    <li><a href="#about_us">O nas</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="login.php">Zaloguj się</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="heading" id="book_now">
            <h1>Twoja nowa przygoda już czeka!</h1>
            <h4><a href="#offers">Zapoznaj się z naszymi nowymi ofertami</a></h4>
        </div>
        <div class="search">
            <form action="tickets.php" method="post">
                <div class="where">
                    <h2>Gdzie:</h2>
                </div>
                <div class="where_input"> 
                    <input type="text" name="destination" id="destination_input" list="country">
                    <datalist id="country">
                        <?php
                            $sql = mysqli_query($conn,"SELECT nazwa FROM kraje;");
                            if(!$sql){
                                echo "zapytanie nie dziala";
                            }
                            while($kraje = mysqli_fetch_array($sql)){
                                echo "<option value='".$kraje['nazwa']."'>".$kraje['nazwa']."</option>";
                            }
                        ?>
                    </datalist>
                </div>
                
                <div class="when">
                    <h2>Kiedy:</h2>
                </div>
                <div class="when_input">
                    <label for="when_start">
                        <h4>OD</h4>
                        <input type="date" name="when_start">
                    </label>
                    <label for="when_end">
                        <h4>DO</h4>
                        <input type="date" name="when_end">
                    </label>
                </div>

                <div class="how_many">
                    <h2>Ile osób:</h2>    
                </div>
                <div class="how_many_input">
                    <input type="number" name="people" id="people">
                </div>
                <div class="search_btn_container">
                    <input type="submit" value="Szukaj" class="search_btn">
                </div>
                <?php
                if(empty($_POST['when_start']) || empty($_POST['when_end']) || empty($_POST['destination'] || empty($_POST['people']))){
                    echo "<h3 class='alert'>Wykorzystaj wszystkie pola</h3>";
                }else{
                    $_SESSION['ticket'] = 'true';
                    header("Location:tickets.php");
                    exit();
                }
                ?>
            </form>
        </div>
        <div class="offers" id="offers">
            <?php
            $offers = mysqli_query($conn, "SELECT * FROM oferty;");

            while($offer = mysqli_fetch_array($offers)){
                // print_r($offer);
                // echo "<br>";
                $kraj = mysqli_fetch_row(mysqli_query($conn,"SELECT Nazwa FROM kraje WHERE ID_kraje = $offer[id_kraj]"));
                echo "<div class='offer'><h2>".$kraj[0]."</h2><h3>".$offer['opis']."</h3></div>";
            }
            ?>
        </div>
        <div class="quotes" id="about_us">
            <h1>Tutaj znajdziesz parę opini od naszych użytkowników:</h1>
            <?php
                $opinie = mysqli_query($conn, "SELECT users.opinie FROM users WHERE users.id_user>2;");

                while($opinia = mysqli_fetch_row($opinie)){
                    echo "<div class='opinion'><h2><q>$opinia[0]</q></h2></div>";
                }
            ?>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    <footer>
        <div class="contact" id="contact">
           <h4>Strone wykonał: MK 5i</h4>
        </div>
    </footer>
</body>
</html>
