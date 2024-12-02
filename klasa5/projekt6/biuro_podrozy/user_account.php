<?php
include 'server_connection.php';

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
        <div class="account"> 
            <?php
            $acc_name = mysqli_query($conn, "SELECT users.name FROM users WHERE users.id_user = ")


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
