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
        <div class="register">
            <form action="register.php" method="post">
                <div>
                    <label for="email">
                        <h4>E-mail:</h4>
                        <input type="email" name="email" id="email">
                    </label>

                    <label for="user_register">
                        <h4>Nazwa użytkownika:</h4>
                        <input type="text" name="user_register" id="user_register"> 
                    </label>
        
                    <label for="pass_register">
                        <h4>Hasło:</h4>
                        <input type="password" name="pass_register" id="pass_register" max='15'>
                    </label>
        
                    <label for="pass_register_check">
                        <h4>Powtórz Hasło:</h4>
                        <input type="password" name="pass_register_check" id="pass_register_check" max='15'>
                    </label>
                    <div class="register_btn">
                        <input type="submit" value="Zarejestruj sie" id="register_btn">
                    </div>
                    <?php
                        if(isset($_POST['email']) && isset($_POST['user_register']) && isset($_POST['pass_register']) && isset($_POST['pass_register_check'])){
                            $email = $_POST['email'];
                            $user = $_POST['user_register'];

                            $checkDB = mysqli_fetch_array(mysqli_query($conn,'SELECT users.name FROM users WHERE users.id_user NOT IN (1,2)'));                    

                            if(in_array($user,$checkDB)){
                                echo "<h3>Podaj inną nazwę użytkownika</h3>";
                            }else{
                                echo "<h3>cos poszlo nie tak</h3>";
                                // $pass = $_POST['pass_register'];
                                // $passCheck = $_POST['pass_register_check'];
                                // if($pass != $passCheck){
                                //     echo "hasła nie są takie same";
                                // }else{
                                //     echo "wszystko poszło";
                                //     mysqli_query($conn, "CREATE USER '$user'@'localhost' identified BY '$pass'");
                                //     mysqli_query($conn, "INSERT INTO users(name,pass,e_mail) VALUES('$user','$pass','$email')");
                                // }
                            }
                        }else{
                            echo "<h3>Wpisz poprawne dane</h3>";
                        }
                    ?>
                </div>        
            </form>
        </div>
    </main>
    <footer>
        <div class="contact" id="contact">
           <h4>Strone wykonał: MK 5i</h4>
        </div>
    </footer>      
</body>
</html>