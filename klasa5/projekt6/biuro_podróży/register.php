<?php
    include 'server_connection.php';
?>
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
        <div class="register">
            <form action="register.php" method="post">
                <label for="email">
                    E-mail:
                    <input type="email" name="email" id="email">
                </label>
                <label for="user_register">
                    Nazwa urzytkownika:
                    <input type="text" name="user_register" id="user_register"> 
                </label>
                <label for="pass_register">
                    Hasło:
                    <input type="password" name="pass_register" id="pass_register">
                </label>
                <label for="pass_register_check">
                    Powtórz hasło:
                    <input type="password" name="pass_register_check" id="pass_register_check">
                </label>
                <input type="submit" value="Zarejestruj sie">
            </form>
            <?php
                if(isset($_POST['email']) && isset($_POST['user_register']) && isset($_POST['pass_register']) && isset($_POST['pass_register_check'])){
                    $email = $_POST['email'];
                    $user = $_POST['user_register'];

                    $checkDB = mysqli_fetch_array(mysqli_query($conn,'SELECT users.name FROM users WHERE users.id_user NOT IN (1,2)'));                    

                    if(in_array($user,$checkDB)){
                        echo "Podaj inną nazwę urzytkownika";
                    }else{
                        echo "cos poszlo nie tak";
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
                    echo "Wpisz poprawne dane";
                }
            ?>
        </div>
    </main>
</body>
</html>