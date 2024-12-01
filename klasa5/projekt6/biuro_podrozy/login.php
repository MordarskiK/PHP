<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biuro podróży</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="main_page.php">Strona główna</a></li>
            <li><a href="offers.php">Oferty</a></li>
            <li><a href="basket.php">Koszyk</a></li>
            <li><a href="login.php">Logowanie</a></li>
        </ul>
    </nav>
    <main>
        <div class="login">
            <form action="login.php" method="post">
                <label for="user_login">
                    Nazwa urzytkownika, bądź email:
                    <input type="text" name="user_login" id="user_login"> 
                </label>
                <label for="pass_login">
                    Hasło:
                    <input type="password" name="pass_login" id="pass_login">
                </label>
                <input type="button" value="Zaloguj">
                <a href="register.php"><input type="button" value="Zarejestruj sie"></a>
            </form>
            <?php
                if(isset($_POST['user_login']) && isset($_POST['pass_login'])){

                }
            ?>
        </div>
    </main>
    <footer>
        <div class="conca"></div>
    </footer>
</body>
</html>

<?php
// INSERT INTO users(name,pass) VALUES("gosc","");
?>