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
        <div class="login">
            <form action="login.php" method="post">
                <div>
                    <label for="user_login">
                        <h3>Nazwa użytkownika, bądź email:</h3>
                        <input type="text" name="user_login" id="user_login"> 
                    </label>
                    <label for="pass_login">
                        <h3>Hasło:</h3>
                        <input type="password" name="pass_login" id="pass_login">
                    </label>
                    <div>
                        <input type="button" value="Zaloguj">
                        <a href="register.php"><input type="button" value="Zarejestruj sie"></a>
                    </div>
                </div>
            </form>
            <?php
                if(isset($_POST['user_login']) && isset($_POST['pass_login'])){

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